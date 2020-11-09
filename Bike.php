<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle
{

    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
    }

    public function switchOn() :bool
    {
        $result = false;
       if ($this->currentSpeed > 10){
           $result = $this->light = true;
       }
       return $result;
    }

    public function switchOff() :bool
    {
        return $this->light = false;
    }
}