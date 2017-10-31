<?php

namespace Nfq\WheelSize\Parser;

/**
 * Class Parser
 * @package Nfq\WheelSize\Parser
 */
class Parser
{
    /**
     * @param \stdClass $data
     * @return array
     */
    public function extractYears($data)
    {
        if ($data instanceof \stdClass && isset($data->years)) {
            return $data->years;
        }

        return [];
    }

    /**
     * @param \stdClass $data
     * @return array
     */
    public function extractEngines($data)
    {
        $results = [];

        /** @var \stdClass $item */
        foreach ($data as $item) {
            $results[] = [
                'slug' => $item->trim,
                'name' => $item->trim . ' (' . $item->power->kW . ' kW)'
            ];
        }

        return $results;
    }

    /**
     * @param \stdClass $data
     * @param string $trim
     * @return array
     */
    public function extractRims($data, $trim)
    {
        $results = [];

        /** @var \stdClass $item */
        foreach ($data as $item) {
            if ($item->trim == $trim) {
                foreach ($item->wheels as $wheel) {
                    $key = $wheel->front->tire_width . $wheel->front->tire_aspect_ratio . $wheel->front->rim_diameter;

                    $results[] = [
                        'name' => $wheel->front->rim_diameter . $wheel->front->tire_construction . ' (' .$wheel->front->tire  .')',
                        'slug' => $key,
                    ];
                }
            }
        }

        return $results;
    }
}
