<?php

use Acme\Decorator\{
    OilChange, BasicInspection, TireRotation
};
use PHPUnit\Framework\TestCase;

class CarInspectionTest extends TestCase
{
    /**
     * @test
     * @dataProvider carServices
     * @param $service
     * @param $cost
     */
    public function should_return_the_right_price_for_services_renders($service, $cost)
    {
        $expected = $service->getCost();
        $this->assertEquals($expected, $cost);
    }
    public function carServices()
    {
        return [
           [(new BasicInspection()), 19],
           [(new OilChange( new BasicInspection())), 48],
           [(new TireRotation( new BasicInspection())), 49],
           [(new TireRotation( new OilChange( new BasicInspection()))), 78]
        ];
    }
}