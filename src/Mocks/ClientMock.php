<?php

namespace Nfq\WheelSize\Mocks;

use Nfq\WheelSize\Client;

/**
 * Class ClientMock
 * @package WheelSize
 */
class ClientMock extends Client
{

    /**
     * Returns manufacturers.
     *
     * @param bool $force
     * @return array
     */
    public function getManufacturers($force = false)
    {
        $data = '
         [
            {
                "slug": "acura",
                "name": "Acura"
            },
            {
                "slug": "alfa-romeo",
                "name": "Alfa Romeo"
            },
            {
                "slug": "aston-martin",
                "name": "Aston Martin"
            },
            {
                "slug": "audi",
                "name": "Audi"
            },
            {
                "slug": "chevrolet",
                "name": "Chevrolet"
            }
        ]
        ';

        return json_decode($data);
    }

    /**
     * Returns manufacturer's models.
     *
     * @param string $slug
     * @param bool $force
     * @return array
     */
    public function getManufacturersModels($slug, $force = false)
    {
        $data = '
        [
            {
                "slug": "100",
                "name": "100",
                "name_en": "100"
            },
            {
                "slug": "80",
                "name": "80",
                "name_en": "80"
            },
            {
                "slug": "a1",
                "name": "A1",
                "name_en": "A1"
            },
            {
                "slug": "a2",
                "name": "A2",
                "name_en": "A2"
            },
            {
                "slug": "a3",
                "name": "A3",
                "name_en": "A3"
            },
            {
                "slug": "a4",
                "name": "A4",
                "name_en": "A4"
            },
            {
                "slug": "a4-allroad",
                "name": "A4 Allroad",
                "name_en": "A4 Allroad"
            },
            {
                "slug": "a5",
                "name": "A5",
                "name_en": "A5"
            },
            {
                "slug": "a6",
                "name": "A6",
                "name_en": "A6"
            },
            {
                "slug": "a6-allroad",
                "name": "A6 Allroad",
                "name_en": "A6 Allroad"
            },
            {
                "slug": "a7",
                "name": "A7",
                "name_en": "A7"
            },
            {
                "slug": "a8",
                "name": "A8",
                "name_en": "A8"
            },
            {
                "slug": "allroad",
                "name": "Allroad",
                "name_en": "Allroad"
            },
            {
                "slug": "cabriolet",
                "name": "Cabriolet",
                "name_en": "Cabriolet"
            },
            {
                "slug": "coupe",
                "name": "Coupe",
                "name_en": "Coupe"
            },
            {
                "slug": "q2",
                "name": "Q2",
                "name_en": "Q2"
            },
            {
                "slug": "q3",
                "name": "Q3",
                "name_en": "Q3"
            },
            {
                "slug": "q5",
                "name": "Q5",
                "name_en": "Q5"
            },
            {
                "slug": "q7",
                "name": "Q7",
                "name_en": "Q7"
            },
            {
                "slug": "r8",
                "name": "R8",
                "name_en": "R8"
            },
            {
                "slug": "rs-q3",
                "name": "RS Q3",
                "name_en": "RS Q3"
            },
            {
                "slug": "rs2",
                "name": "RS2",
                "name_en": "RS2"
            },
            {
                "slug": "rs3",
                "name": "RS3",
                "name_en": "RS3"
            },
            {
                "slug": "rs4",
                "name": "RS4",
                "name_en": "RS4"
            },
            {
                "slug": "rs5",
                "name": "RS5",
                "name_en": "RS5"
            },
            {
                "slug": "rs6",
                "name": "RS6",
                "name_en": "RS6"
            },
            {
                "slug": "rs7",
                "name": "RS7",
                "name_en": "RS7"
            },
            {
                "slug": "s1",
                "name": "S1",
                "name_en": "S1"
            },
            {
                "slug": "s2",
                "name": "S2",
                "name_en": "S2"
            },
            {
                "slug": "s3",
                "name": "S3",
                "name_en": "S3"
            },
            {
                "slug": "s4",
                "name": "S4",
                "name_en": "S4"
            },
            {
                "slug": "s5",
                "name": "S5",
                "name_en": "S5"
            },
            {
                "slug": "s6",
                "name": "S6",
                "name_en": "S6"
            },
            {
                "slug": "s7",
                "name": "S7",
                "name_en": "S7"
            },
            {
                "slug": "s8",
                "name": "S8",
                "name_en": "S8"
            },
            {
                "slug": "sq5",
                "name": "SQ5",
                "name_en": "SQ5"
            },
            {
                "slug": "sq7",
                "name": "SQ7",
                "name_en": "SQ7"
            },
            {
                "slug": "tt",
                "name": "TT",
                "name_en": "TT"
            },
            {
                "slug": "tt-rs",
                "name": "TT RS",
                "name_en": "TT RS"
            },
            {
                "slug": "tts",
                "name": "TTS",
                "name_en": "TTS"
            },
            {
                "slug": "v8",
                "name": "V8",
                "name_en": "V8"
            }
        ]
        ';

        return json_decode($data);
    }

    /**
     * Returns model's details.
     *
     * @param string $manufacturerSlug
     * @param string $modelSlug
     * @param bool $force
     * @return array
     */
    public function getModelsDetails($manufacturerSlug, $modelSlug, $force = false)
    {
        $data = '
                {
            "make": {
                "slug": "audi",
                "name": "Audi",
                "name_en": "Audi"
            },
            "model": {
                "slug": "a4",
                "name": "A4",
                "name_en": "A4"
            },
            "year": null,
            "years": [
                2017,
                2016,
                2015,
                2014,
                2013,
                2012,
                2011,
                2010,
                2009,
                2008,
                2007,
                2006,
                2005,
                2004,
                2003,
                2002,
                2001,
                2000,
                1999,
                1998,
                1997,
                1996,
                1995,
                1994
            ],
            "generations": [
                {
                    "name": "B9",
                    "bodies": [
                        {
                            "title": "B9 [2016 .. 2018] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2016-2017-1455205004.51.png"
                        },
                        {
                            "title": "B9 [2016 .. 2018] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2016-2017-1455205005.06.png"
                        }
                    ],
                    "start_year": 2016,
                    "end_year": 2018,
                    "years": [
                        2017,
                        2016
                    ]
                },
                {
                    "name": "B8",
                    "bodies": [
                        {
                            "title": "B8 [2009 .. 2015] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2008-2015-1455205824.19.png"
                        },
                        {
                            "title": "B8 [2009 .. 2015] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2008-2015-1455205824.75.png"
                        }
                    ],
                    "start_year": 2009,
                    "end_year": 2015,
                    "years": [
                        2015,
                        2014,
                        2013,
                        2012,
                        2011,
                        2010,
                        2009
                    ]
                },
                {
                    "name": "B7",
                    "bodies": [
                        {
                            "title": "B7 [2005 .. 2008] [EUDM] Convertible, 2d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2005-2008-1476110292.61.jpg"
                        },
                        {
                            "title": "B7 [2005 .. 2008] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2005-2008-1476110293.09.jpg"
                        },
                        {
                            "title": "B7 [2005 .. 2008] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2005-2008-1476110293.37.jpg"
                        }
                    ],
                    "start_year": 2005,
                    "end_year": 2008,
                    "years": [
                        2007,
                        2006,
                        2005,
                        2008
                    ]
                },
                {
                    "name": "B6",
                    "bodies": [
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110521.81.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.29.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Convertible, 2d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.54.jpeg"
                        }
                    ],
                    "start_year": 2001,
                    "end_year": 2004,
                    "years": [
                        2004,
                        2003,
                        2002,
                        2001
                    ]
                },
                {
                    "name": "B5",
                    "bodies": [
                        {
                            "title": "B5 [1994 .. 2000] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-1994-2000-1472892973.58.jpeg"
                        },
                        {
                            "title": "B5 [1994 .. 2000] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-1994-2000-1472892974.14.jpg"
                        }
                    ],
                    "start_year": 1994,
                    "end_year": 2000,
                    "years": [
                        2000,
                        1999,
                        1998,
                        1997,
                        1996,
                        1995,
                        1994
                    ]
                }
            ],
            "tires": {
                "aspect_ratio": {
                    "units": "%",
                    "max": 65,
                    "min": 30
                },
                "diameter": {
                    "units": "in",
                    "max": 20,
                    "min": 15
                },
                "tire_size": {
                    "max": "255/65 R20.0",
                    "min": "195/30 R15.0"
                },
                "width": {
                    "units": "mm",
                    "max": 255,
                    "min": 195
                }
            },
            "rims": {
                "5x112": {
                    "diameter": {
                        "units": "in",
                        "max": 20,
                        "min": 15
                    },
                    "offset": {
                        "units": "mm",
                        "max": 47,
                        "min": 32
                    },
                    "width": {
                        "units": "in",
                        "max": 9,
                        "min": 6
                    }
                }
            }
        }';

        return json_decode($data);
    }

    public function searchByModel($manufacturerSlug, $modelSlug, $year, $force = false)
    {
        $data = '
        [
            {
                "market": {
                    "abbr": "EUDM",
                    "name": "European domestic market",
                    "slug": "eudm",
                    "name_en": "European domestic market"
                },
                "body": null,
                "trim": "1.6i",
                "generation": {
                    "name": "B6",
                    "bodies": [
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110521.81.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.29.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Convertible, 2d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.54.jpeg"
                        }
                    ],
                    "start_year": 2001,
                    "end_year": 2004,
                    "years": [
                        2004,
                        2003,
                        2002,
                        2001
                    ]
                },
                "stud_holes": 5,
                "pcd": 112,
                "centre_bore": 57.1,
                "lock_type": "bolt",
                "lock_text": "M14 x 1.5",
                "bolt_pattern": "5x112",
                "power": {
                    "PS": 102,
                    "hp": 101,
                    "kW": 75
                },
                "fuel": "Petrol",
                "wheels": [
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 220,
                                "psi": 32,
                                "bar": 2.2
                            },
                            "rim": "6.5Jx15 ET37",
                            "rim_diameter": 15,
                            "rim_width": 6.5,
                            "rim_offset": 37,
                            "tire": "195/65R15",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 195,
                            "tire_aspect_ratio": 65,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 91,
                            "speed_index": "T"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx16 ET42",
                            "rim_diameter": 16,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "205/55R16",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 55,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 94,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 220,
                                "psi": 32,
                                "bar": 2.2
                            },
                            "rim": "6.5Jx16 ET40",
                            "rim_diameter": 16,
                            "rim_width": 6.5,
                            "rim_offset": 40,
                            "tire": "195/60R16",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 195,
                            "tire_aspect_ratio": 60,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 91,
                            "speed_index": "T"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx17 ET42",
                            "rim_diameter": 17,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "205/50R17",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 50,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 93,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7Jx18 ET40",
                            "rim_diameter": 18,
                            "rim_width": 7,
                            "rim_offset": 40,
                            "tire": "205/45R18",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 45,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 91,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    }
                ]
            },
            {
                "market": {
                    "abbr": "EUDM",
                    "name": "European domestic market",
                    "slug": "eudm",
                    "name_en": "European domestic market"
                },
                "body": null,
                "trim": "1.8T",
                "generation": {
                    "name": "B6",
                    "bodies": [
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110521.81.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.29.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Convertible, 2d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.54.jpeg"
                        }
                    ],
                    "start_year": 2001,
                    "end_year": 2004,
                    "years": [
                        2004,
                        2003,
                        2002,
                        2001
                    ]
                },
                "stud_holes": 5,
                "pcd": 112,
                "centre_bore": 57.1,
                "lock_type": "bolt",
                "lock_text": "M14 x 1.5",
                "bolt_pattern": "5x112",
                "power": {
                    "PS": 163,
                    "hp": 161,
                    "kW": 120
                },
                "fuel": "Petrol",
                "wheels": [
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 220,
                                "psi": 32,
                                "bar": 2.2
                            },
                            "rim": "7Jx15 ET39",
                            "rim_diameter": 15,
                            "rim_width": 7,
                            "rim_offset": 39,
                            "tire": "205/60R15",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 60,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 94,
                            "speed_index": "T"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx16 ET42",
                            "rim_diameter": 16,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "205/55R16",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 55,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 94,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx16 ET42",
                            "rim_diameter": 16,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "215/55R16",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 215,
                            "tire_aspect_ratio": 55,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 95,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7Jx17 ET40",
                            "rim_diameter": 17,
                            "rim_width": 7,
                            "rim_offset": 40,
                            "tire": "215/45R17",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 215,
                            "tire_aspect_ratio": 45,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 91,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7.5Jx18 ET38",
                            "rim_diameter": 18,
                            "rim_width": 7.5,
                            "rim_offset": 38,
                            "tire": "225/40R18",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 225,
                            "tire_aspect_ratio": 40,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 93,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    }
                ]
            },
            {
                "market": {
                    "abbr": "EUDM",
                    "name": "European domestic market",
                    "slug": "eudm",
                    "name_en": "European domestic market"
                },
                "body": null,
                "trim": "2.0FSi",
                "generation": {
                    "name": "B6",
                    "bodies": [
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110521.81.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.29.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Convertible, 2d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.54.jpeg"
                        }
                    ],
                    "start_year": 2001,
                    "end_year": 2004,
                    "years": [
                        2004,
                        2003,
                        2002,
                        2001
                    ]
                },
                "stud_holes": 5,
                "pcd": 112,
                "centre_bore": 57.1,
                "lock_type": "bolt",
                "lock_text": "M14 x 1.5",
                "bolt_pattern": "5x112",
                "power": {
                    "PS": 150,
                    "hp": 148,
                    "kW": 110
                },
                "fuel": "Petrol",
                "wheels": [
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 220,
                                "psi": 32,
                                "bar": 2.2
                            },
                            "rim": "7Jx15 ET39",
                            "rim_diameter": 15,
                            "rim_width": 7,
                            "rim_offset": 39,
                            "tire": "205/60R15",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 60,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 94,
                            "speed_index": "T"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx16 ET42",
                            "rim_diameter": 16,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "205/55R16",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 55,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 94,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx17 ET42",
                            "rim_diameter": 17,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "205/50R17",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 50,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 93,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7Jx18 ET40",
                            "rim_diameter": 18,
                            "rim_width": 7,
                            "rim_offset": 40,
                            "tire": "205/45R18",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 45,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 89,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7.5Jx18 ET40",
                            "rim_diameter": 18,
                            "rim_width": 7.5,
                            "rim_offset": 40,
                            "tire": "215/40R18",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 215,
                            "tire_aspect_ratio": 40,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 91,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    }
                ]
            },
            {
                "market": {
                    "abbr": "EUDM",
                    "name": "European domestic market",
                    "slug": "eudm",
                    "name_en": "European domestic market"
                },
                "body": null,
                "trim": "2.4i",
                "generation": {
                    "name": "B6",
                    "bodies": [
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110521.81.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.29.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Convertible, 2d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.54.jpeg"
                        }
                    ],
                    "start_year": 2001,
                    "end_year": 2004,
                    "years": [
                        2004,
                        2003,
                        2002,
                        2001
                    ]
                },
                "stud_holes": 5,
                "pcd": 112,
                "centre_bore": 57.1,
                "lock_type": "bolt",
                "lock_text": "M14 x 1.5",
                "bolt_pattern": "5x112",
                "power": {
                    "PS": 170,
                    "hp": 168,
                    "kW": 125
                },
                "fuel": "Petrol",
                "wheels": [
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx16 ET42",
                            "rim_diameter": 16,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "205/55R16",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 55,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 94,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7Jx17 ET42",
                            "rim_diameter": 17,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "225/45R17",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 225,
                            "tire_aspect_ratio": 45,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 91,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7.5Jx17 ET38",
                            "rim_diameter": 17,
                            "rim_width": 7.5,
                            "rim_offset": 38,
                            "tire": "235/45R17",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 235,
                            "tire_aspect_ratio": 45,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 93,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7.5Jx18 ET40",
                            "rim_diameter": 18,
                            "rim_width": 7.5,
                            "rim_offset": 40,
                            "tire": "225/40R18",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 225,
                            "tire_aspect_ratio": 40,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 92,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "8Jx18 ET38",
                            "rim_diameter": 18,
                            "rim_width": 8,
                            "rim_offset": 38,
                            "tire": "235/40ZR18",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 235,
                            "tire_aspect_ratio": 40,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 93,
                            "speed_index": "W"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    }
                ]
            },
            {
                "market": {
                    "abbr": "EUDM",
                    "name": "European domestic market",
                    "slug": "eudm",
                    "name_en": "European domestic market"
                },
                "body": null,
                "trim": "3.0i",
                "generation": {
                    "name": "B6",
                    "bodies": [
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110521.81.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.29.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Convertible, 2d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.54.jpeg"
                        }
                    ],
                    "start_year": 2001,
                    "end_year": 2004,
                    "years": [
                        2004,
                        2003,
                        2002,
                        2001
                    ]
                },
                "stud_holes": 5,
                "pcd": 112,
                "centre_bore": 57.1,
                "lock_type": "bolt",
                "lock_text": "M14 x 1.5",
                "bolt_pattern": "5x112",
                "power": {
                    "PS": 220,
                    "hp": 217,
                    "kW": 162
                },
                "fuel": "Petrol",
                "wheels": [
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx16 ET42",
                            "rim_diameter": 16,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "215/55R16",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 215,
                            "tire_aspect_ratio": 55,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 94,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7Jx17 ET42",
                            "rim_diameter": 17,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "225/45R17",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 225,
                            "tire_aspect_ratio": 45,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 91,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7.5Jx17 ET38",
                            "rim_diameter": 17,
                            "rim_width": 7.5,
                            "rim_offset": 38,
                            "tire": "235/45R17",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 235,
                            "tire_aspect_ratio": 45,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 93,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7.5Jx18 ET40",
                            "rim_diameter": 18,
                            "rim_width": 7.5,
                            "rim_offset": 40,
                            "tire": "225/40R18",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 225,
                            "tire_aspect_ratio": 40,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 93,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "8Jx18 ET38",
                            "rim_diameter": 18,
                            "rim_width": 8,
                            "rim_offset": 38,
                            "tire": "235/40ZR18",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 235,
                            "tire_aspect_ratio": 40,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 93,
                            "speed_index": "W"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    }
                ]
            },
            {
                "market": {
                    "abbr": "EUDM",
                    "name": "European domestic market",
                    "slug": "eudm",
                    "name_en": "European domestic market"
                },
                "body": null,
                "trim": "1.9TDi",
                "generation": {
                    "name": "B6",
                    "bodies": [
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110521.81.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.29.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Convertible, 2d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.54.jpeg"
                        }
                    ],
                    "start_year": 2001,
                    "end_year": 2004,
                    "years": [
                        2004,
                        2003,
                        2002,
                        2001
                    ]
                },
                "stud_holes": 5,
                "pcd": 112,
                "centre_bore": 57.1,
                "lock_type": "bolt",
                "lock_text": "M14 x 1.5",
                "bolt_pattern": "5x112",
                "power": {
                    "PS": 100,
                    "hp": 99,
                    "kW": 73.5
                },
                "fuel": "Diesel",
                "wheels": [
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 220,
                                "psi": 32,
                                "bar": 2.2
                            },
                            "rim": "6.5Jx15 ET37",
                            "rim_diameter": 15,
                            "rim_width": 6.5,
                            "rim_offset": 37,
                            "tire": "195/65R15",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 195,
                            "tire_aspect_ratio": 65,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 91,
                            "speed_index": "T"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx16 ET42",
                            "rim_diameter": 16,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "205/55R16",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 55,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 94,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 220,
                                "psi": 32,
                                "bar": 2.2
                            },
                            "rim": "6.5Jx16 ET40",
                            "rim_diameter": 16,
                            "rim_width": 6.5,
                            "rim_offset": 40,
                            "tire": "195/60R16",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 195,
                            "tire_aspect_ratio": 60,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 91,
                            "speed_index": "T"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx17 ET42",
                            "rim_diameter": 17,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "205/50R17",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 50,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 93,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7Jx18 ET40",
                            "rim_diameter": 18,
                            "rim_width": 7,
                            "rim_offset": 40,
                            "tire": "205/45R18",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 45,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 91,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    }
                ]
            },
            {
                "market": {
                    "abbr": "EUDM",
                    "name": "European domestic market",
                    "slug": "eudm",
                    "name_en": "European domestic market"
                },
                "body": null,
                "trim": "2.5TDi",
                "generation": {
                    "name": "B6",
                    "bodies": [
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Estate, 5d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110521.81.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Saloon",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.29.jpeg"
                        },
                        {
                            "title": "B6 [2001 .. 2004] [EUDM] Convertible, 2d",
                            "image": "https://automobile-assets.s3.amazonaws.com/automobile/body/audi-a4-2001-2004-1476110522.54.jpeg"
                        }
                    ],
                    "start_year": 2001,
                    "end_year": 2004,
                    "years": [
                        2004,
                        2003,
                        2002,
                        2001
                    ]
                },
                "stud_holes": 5,
                "pcd": 112,
                "centre_bore": 57.1,
                "lock_type": "bolt",
                "lock_text": "M14 x 1.5",
                "bolt_pattern": "5x112",
                "power": {
                    "PS": 155,
                    "hp": 153,
                    "kW": 114
                },
                "fuel": "Diesel",
                "wheels": [
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 220,
                                "psi": 32,
                                "bar": 2.2
                            },
                            "rim": "7Jx15 ET39",
                            "rim_diameter": 15,
                            "rim_width": 7,
                            "rim_offset": 39,
                            "tire": "205/60R15",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 60,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 94,
                            "speed_index": "T"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": true,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx16 ET42",
                            "rim_diameter": 16,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "205/55R16",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 55,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 94,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 240,
                                "psi": 35,
                                "bar": 2.4
                            },
                            "rim": "7Jx17 ET42",
                            "rim_diameter": 17,
                            "rim_width": 7,
                            "rim_offset": 42,
                            "tire": "205/50R17",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 50,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 93,
                            "speed_index": "H"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": null,
                            "tire_construction": null,
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7Jx18 ET40",
                            "rim_diameter": 18,
                            "rim_width": 7,
                            "rim_offset": 40,
                            "tire": "205/45R18",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 205,
                            "tire_aspect_ratio": 45,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 89,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    },
                    {
                        "showing_fp_only": true,
                        "is_stock": false,
                        "front": {
                            "tire_pressure": {
                                "kPa": 260,
                                "psi": 38,
                                "bar": 2.6
                            },
                            "rim": "7.5Jx18 ET40",
                            "rim_diameter": 18,
                            "rim_width": 7.5,
                            "rim_offset": 40,
                            "tire": "215/40R18",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": 215,
                            "tire_aspect_ratio": 40,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": 91,
                            "speed_index": "V"
                        },
                        "rear": {
                            "tire_pressure": null,
                            "rim": "",
                            "rim_diameter": null,
                            "rim_width": null,
                            "rim_offset": null,
                            "tire": "",
                            "tire_sizing_system": "metric",
                            "tire_construction": "R",
                            "tire_width": null,
                            "tire_aspect_ratio": null,
                            "tire_diameter": null,
                            "tire_section_width": null,
                            "tire_is_82series": false,
                            "load_index": null,
                            "speed_index": null
                        }
                    }
                ]
            }
        ]
        ';

        return json_decode($data);
    }
}
