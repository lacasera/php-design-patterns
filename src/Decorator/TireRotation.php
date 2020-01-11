<?php namespace Acme\Decorator;

class TireRotation implements CarInspection
{
    protected $carInspection;

    public function __construct(CarInspection $carInspection)
    {
        $this->carInspection = $carInspection;
    }


    public function getCost(): int
    {
        return 30 + $this->carInspection->getCost();
    }
}