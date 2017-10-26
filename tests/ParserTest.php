<?php

/**
 * Class ParserTest
 */
class ParserTest extends PHPUnit_Framework_TestCase
{
    /**
     * Testing if parse years from client response.
     *
     * @return void
     */
    public function testIfParseYears()
    {
        $client = new \Nfq\WheelSize\Mocks\ClientMock('testKey');
        $years = $client->getModelYears('audi', 'a4');

        $this->assertArraySubset([
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
        ], $years);
    }

    /**
     * Testing if parse engines from client response.
     *
     * @return void
     */
    public function testIfParseEngines()
    {
        $client = new \Nfq\WheelSize\Mocks\ClientMock('testKey');
        $engines = $client->getModelEngines('audi', 'a4', 2015);

        $this->assertEquals('[{"slug":"1.6i","name":"1.6i (75 kW)"},{"slug":"1.8T","name":"1.8T (120 kW)"},{"slug":"2.0FSi","name":"2.0FSi (110 kW)"},{"slug":"2.4i","name":"2.4i (125 kW)"},{"slug":"3.0i","name":"3.0i (162 kW)"},{"slug":"1.9TDi","name":"1.9TDi (73.5 kW)"},{"slug":"2.5TDi","name":"2.5TDi (114 kW)"}]',
            json_encode($engines));
    }

    /**
     * Testing if parse tires from client response.
     *
     * @return void
     */
    public function testIsParseRims()
    {
        $client = new \Nfq\WheelSize\Mocks\ClientMock('testKey');
        $tires = $client->getModelTires('audi', 'a4', 2015, '1.6i');

        $this->assertEquals('[{"name":"15R","slug":"1956515"},{"name":"16R","slug":"2055516"},{"name":"16R","slug":"1956016"},{"name":"17R","slug":"2055017"},{"name":"18R","slug":"2054518"}]',
            json_encode($tires));

        $tires = $client->getModelTires('audi', 'a4', 2015, '2.4i');

        $this->assertEquals('[{"name":"16R","slug":"2055516"},{"name":"17R","slug":"2254517"},{"name":"17R","slug":"2354517"},{"name":"18R","slug":"2254018"},{"name":"18R","slug":"2354018"}]',
            json_encode($tires));
    }
}
