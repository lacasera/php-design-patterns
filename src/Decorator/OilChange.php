<?php namespace Acme\Decorator;

class OilChange implements CarInspection
{
    protected $carInspection;

    public function __construct(CarInspection $carInspection)
    {
        $this->carInspection = $carInspection;
    }


    public function getCost(): int
    {
        return 29 + $this->carInspection->getCost();
    }
}