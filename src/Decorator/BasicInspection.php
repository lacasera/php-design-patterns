<?php namespace Acme\Decorator;

/**
 * core service that can be decorated with other services
 * offered by our car shop
 * Class BasicInspection
 * @package Acme\Decorator
 */
class BasicInspection implements CarInspection
{
    public function getCost(): int
    {
        return 19;
    }
}
