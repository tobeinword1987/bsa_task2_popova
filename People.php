<?php

/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 27.05.16
 * Time: 22:31
 */
class People
{
    private $stack;
    const limit=4;

    public function __construct()
    {
        $this->stack=array();
    }
    
    public function get_people()
    {
        return count($this->stack);
    }


    public function push($count_people)
    {
        for ($i=0;$i<$count_people;$i++)
        {
            array_unshift($this->stack,'human');
        }

        return $this->stack;
    }

    public function pop($count_people)
    {
        for ($i=0;$i<$count_people;$i++)
        {
            array_shift($this->stack);
        }
        return $this->stack;
    }
}