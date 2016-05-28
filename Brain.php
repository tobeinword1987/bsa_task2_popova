<?php

/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 27.05.16
 * Time: 22:42
 */

class Brain extends People
{
    public function print_error($msg)
    {
        echo $msg;
    }

    public function checkPeople(Elevator $ex_elvator,$floor)
    {
        $count_people=$this->get_people();
        if ($count_people>4)
            $this->print_error("В лифте $count_people человек! Это много!". PHP_EOL);
        else if ($count_people<=0)
            $this->print_error("В лифте нет столько людей. Пустой лифт не едет!". PHP_EOL);
        else
        $ex_elvator->setFloor($floor);
    }
}

