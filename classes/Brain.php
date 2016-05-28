<?php

/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 27.05.16
 * Time: 22:42
 */

class Brain //extends People
{
    public function print_error($msg)
    {
        $colors=new Colors();
        echo $colors->getColoredString($msg,"white","red"). PHP_EOL;
    }

    //Контролирует результирующее количество людей в лифте
    public function checkPeople(Elevator $ex_elvator, People $ex_people,$floor)
    {
        $count_people=$ex_people->get_people();
        if ($count_people>4)
            $this->print_error("В лифте $count_people человек! Это много!");
        else if ($count_people<=0)
            $this->print_error("В лифте нет столько людей. Пустой лифт не едет!");
        else if($ex_elvator->getFloor()==$floor)
        {
            $this->print_error("Вы выбрали то же этаж, на котором находитесь!");
        }
        else
        $ex_elvator->setFloor($floor);
    }
}

