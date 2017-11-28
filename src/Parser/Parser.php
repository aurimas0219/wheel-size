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

                    $results['front'][$key] = [
                        'name' => $wheel->front->rim_diameter . $wheel->front->tire_construction . ' (' .$wheel->front->tire  .')',
                        'slug' => $key,
                    ];
                    if ($wheel->rear) {
                        $key = $wheel->rear->tire_width . $wheel->rear->tire_aspect_ratio . $wheel->rear->rim_diameter;
                        if ($key) {
                            $results['back'][$key] = [
                                'name' => $wheel->rear->rim_diameter . $wheel->rear->tire_construction . ' (' . $wheel->rear->tire . ')',
                                'slug' => $key,
                            ];
                        }
                    }
                }
            }
        }

        $rims['front'] = array_values($results['front']);
        if ($results['back']) {
            $rims['back'] = array_values($results['back']);
        }

        return $rims;
    }
}
