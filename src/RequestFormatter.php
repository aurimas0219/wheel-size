<?php


namespace Nfq\WheelSize;

/**
 * Class RequestFormatter
 *
 * @package Nfq\WheelSize
 */
class RequestFormatter
{
    /** @var string */
    const API_ENDPOINT = 'https://api.wheel-size.com/v1/';

    /**
     * @var string
     */
    private $userKey;

    /**
     * RequestFormatter constructor.
     *
     * @param string $userKey
     */
    public function __construct($userKey)
    {
        $this->userKey = $userKey;
    }

    /**
     * @return string
     */
    private function getUserKey()
    {
        return 'user_key=' . $this->userKey;
    }

    /**
     *
     * @return string
     */
    public function getManufacturersUrl()
    {
        return self::API_ENDPOINT . 'makes/' . '?' . $this->getUserKey();
    }

    /**
     *
     * @param $slug
     *
     * @return string
     */
    public function getManufacturersModelsUrl($slug)
    {
        return self::API_ENDPOINT . 'models/?make=' . $slug . '&' . $this->getUserKey();
    }

    /**
     * @PhpUnitGen\params("'test1'", "'test2'")
     * @PhpUnitGen\assertNotNull()
     * @param $manufacturerSlug
     * @param $modelSlug
     *
     * @return string
     */
    public function getModelsDetailsUrl($manufacturerSlug, $modelSlug)
    {
        return self::API_ENDPOINT . "models/{$manufacturerSlug}/{$modelSlug}/" . '?' . $this->getUserKey();
    }

    /**
     *
     * @param $manufacturerSlug
     * @param $modelSlug
     * @param $year
     *
     * @return string
     */
    public function getSearchUrl($manufacturerSlug, $modelSlug, $year)
    {
        return self::API_ENDPOINT . "search/by_model/?make={$manufacturerSlug}&model={$modelSlug}&year={$year}&"
            . $this->getUserKey();
    }
}
