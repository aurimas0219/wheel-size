<?php

namespace Nfq\WheelSize;

use Nfq\WheelSize\Cache\CacheInterface;
use Nfq\WheelSize\Parser\Parser;

/**
 * Class Client
 *
 * @package Nfq\WheelSize
 */
class Client
{
    const MANUFACTURERS_CACHE_KEY = 'manufacturers';
    const MANUFACTURERS_MODEL_CACHE_KEY = 'models_';
    const SEARCH_MODEL_CACHE_KEY = 'search_models_';
    const TIRES_CACHE_KEY = 'tires_';
    const ENGINE_CACHE_KEY = 'engines_';

    /**
     * @var  CacheInterface
     */
    private $cacheProvider;

    /**
     * @var  Parser
     */
    private $parser;

    /**
     * @var RequestFormatter
     */
    private $requestFormatter;

    /**
     * Client constructor.
     *
     * @param CacheInterface   $cacheProvider
     * @param Parser           $parser
     * @param RequestFormatter $requestFormatter
     */
    public function __construct(CacheInterface $cacheProvider, Parser $parser, RequestFormatter $requestFormatter)
    {
        $this->cacheProvider = $cacheProvider;
        $this->parser = $parser;
        $this->requestFormatter = $requestFormatter;
    }

    /**
     * @param bool $force
     *
     * @return array
     */
    public function getManufacturers($force = false)
    {
        $endpoint = $this->requestFormatter->getManufacturersUrl();

        return $this->getData(self::MANUFACTURERS_CACHE_KEY, $endpoint, $force);
    }

    /**
     * @param string $slug
     * @param bool   $force
     *
     * @return array
     */
    public function getManufacturersModels($slug, $force = false)
    {
        $endpoint = $this->requestFormatter->getManufacturersModelsUrl($slug);
        $key = self::MANUFACTURERS_MODEL_CACHE_KEY . $slug;

        return $this->getData($key, $endpoint, $force);
    }

    /**
     * @param string $manufacturerSlug
     * @param string $modelSlug
     * @param bool   $force
     *
     * @return \stdClass
     */
    public function getModelsDetails($manufacturerSlug, $modelSlug, $force = false)
    {
        $endpoint = $this->requestFormatter->getModelsDetailsUrl($manufacturerSlug, $modelSlug);
        $key = self::MANUFACTURERS_MODEL_CACHE_KEY . $manufacturerSlug . '_' . $modelSlug;

        return $this->getData($key, $endpoint, $force);
    }

    /**
     * Returns model's details.
     *
     * @param string $manufacturerSlug
     * @param string $modelSlug
     * @param string $year
     * @param bool   $force
     *
     * @return \stdClass
     */
    public function searchByModel($manufacturerSlug, $modelSlug, $year, $force = false)
    {
        $endpoint = $this->requestFormatter->getSearchUrl($manufacturerSlug, $modelSlug, $year);
        $key = self::SEARCH_MODEL_CACHE_KEY . $manufacturerSlug . '_' . $modelSlug . '_' . $year;

        return $this->getData($key, $endpoint, $force);
    }

    /**
     * @param string $url
     *
     * @return array
     */
    public function request($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return json_decode($response);
    }

    /**
     * @param string $cacheKey
     * @param string $endpoint
     * @param bool   $force
     *
     * @return array|\stdClass
     */
    protected function getData($cacheKey, $endpoint, $force = false)
    {
        $data = $this->request($endpoint);
        $this->cacheProvider->set($cacheKey, $data);

        return $data;
    }

    /**
     * @param string $manufacturer
     * @param string $model
     *
     * @return array
     */
    public function getModelYears($manufacturer, $model)
    {
        $key = self::TIRES_CACHE_KEY . $manufacturer . '_' . $model;

        if ($this->cacheProvider && $this->cacheProvider->has($key)) {
            return $this->cacheProvider->get($key);
        }
        $data = $this->parser->extractYears($this->getModelsDetails($manufacturer, $model));
        $this->cacheProvider->set($key, $data);

        return $data;
    }

    /**
     * @param string $manufacturer
     * @param string $model
     * @param string $year
     *
     * @return array
     */
    public function getModelEngines($manufacturer, $model, $year)
    {
        $key = self::ENGINE_CACHE_KEY . $manufacturer . '_' . $model;
        if ($this->cacheProvider && $this->cacheProvider->has($key)) {
            $data = $this->cacheProvider->get($key);
        } else {
            $data = $this->parser->extractEngines($this->searchByModel($manufacturer, $model, $year));
            $this->cacheProvider->set($key, $data);
        }

        $tiresKey = self::TIRES_CACHE_KEY . $manufacturer . '_' . $model . '_' . $year . '_';
        if ($this->cacheProvider && $this->cacheProvider->has($tiresKey)) {
            $tiresData = $this->cacheProvider->get($tiresKey);
        } else {
            $tiresData = $this->parser->extractRims($this->searchByModel($manufacturer, $model, $year));
            $this->cacheProvider->set($tiresKey, $tiresData);
        }

        return [
            'engines' => $data,
            'tires' => $tiresData
        ];
    }

    /**
     * @param string $manufacturer
     * @param string $model
     * @param string $year
     * @param string $engine
     *
     * @return array
     */
    public function getModelTires($manufacturer, $model, $year, $engine = '')
    {
        $key = self::TIRES_CACHE_KEY . $manufacturer . '_' . $model . '_' . $year . '_' . $engine;

        if ($this->cacheProvider && $this->cacheProvider->has($key)) {
            return $this->cacheProvider->get($key);
        }
        $data = $this->parser->extractRims($this->searchByModel($manufacturer, $model, $year), $engine);
        $this->cacheProvider->set($key, $data);

        return $data;
    }
}
