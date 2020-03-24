<?php

namespace Nfq\WheelSize\Parser;

use Nfq\WheelSize\EnginePowerFormatter;

/**
 * Class Parser
 *
 * @package Nfq\WheelSize\Parser
 */
class Parser
{
    /**
     * @param \stdClass $data
     *
     * @return array
     */
    public function extractYears($data)
    {
        if ($data instanceof \stdClass && isset($data->years)) {
            $years = $data->years;
            rsort($years);

            return $years;
        }

        return [];
    }

    /**
     * @param \stdClass $data
     *
     * @return array
     */
    public function extractEngines($data)
    {
        $results = [];

        /** @var \stdClass $item */
        foreach ($data as $item) {
            $results[$item->market->abbr][] = [
                'slug' => $item->trim,
                'name' => $item->trim . ' (' . EnginePowerFormatter::format($item->power->kW) . ' kW)'
            ];
        }

        return $results;
    }

    /**
     * @param \stdClass $data
     * @param string    $engine
     *
     * @return array
     */
    public function extractRims($data, $engine = '')
    {
        $results = [];

        /** @var \stdClass $item */
        foreach ($data as $item) {
            if ($item->trim == $engine || $engine == '') {
                foreach ($item->wheels as $wheel) {
                    $key = $wheel->front->tire_width . $wheel->front->tire_aspect_ratio . $wheel->front->rim_diameter;
                    $name = $wheel->front->tire;

                    if ($wheel->rear && $wheel->rear->tire_width) {
                        $key .= '__' . $wheel->rear->tire_width . $wheel->rear->tire_aspect_ratio . $wheel->rear->rim_diameter;
                        $name .= ' / ' . $wheel->rear->tire;
                    }

                    $results[$key] = [
                        'name' => $name,
                        'slug' => $key,
                        'isMain' => $wheel->is_stock
                    ];
                }
            }
        }

        return array_values($results);
    }
}
