<?php

/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 27.05.16
 * Time: 22:31
 */
class People
{
    private $stack;//Стек, который управляет загрузкой и выгрузкой людей из лифта
    const limit=4;

    public function __construct()
    {
        $this->stack=array();
    }
    
    //Получить количество людей в лифте
    public function get_people()
    {
        return count($this->stack);
    }

    //Загрузить людей
    public function push($count_people)
    {
        for ($i=0;$i<$count_people;$i++)
        {
            array_unshift($this->stack,'human');
        }

        return $this->stack;
    }

    //Выгрузить людей
    public function pop($count_people)
    {
            for ($i=0;$i<$count_people;$i++)
        {
            array_shift($this->stack);
        }
        return $this->stack;
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}