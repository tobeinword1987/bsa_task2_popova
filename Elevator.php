<?php

/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 27.05.16
 * Time: 22:22
 */
class Elevator
{
    private $floor=0;
    const limit=4; 

    public function setFloor($floor)
    {
        $this->floor=$floor;
    }

    public function getFloor()
    {
        return $this->floor;
    }
}