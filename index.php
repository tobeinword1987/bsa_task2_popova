<?php
/**
 * Created by PhpStorm.
 * User: lyudmila
 * Date: 24.05.16
 * Time: 19:20
 */

require __DIR__.'/vendor/autoload.php';

class Application{

    public function run(){
        $line="y";
        $ex_people=new People();
        $ex_elevator=new Elevator();
        $ex_brain=new Brain();
        $colors=new Colors();

        while(($line!='N') and  ($line!='n'))
        {
            echo $colors->getColoredString("Сейчас лифт находиться на ".$ex_elevator->getFloor()." этаже.В лифте ".$ex_people->get_people()." человек(а).","white","green"). PHP_EOL;

            $push =$ex_brain->checkNumberIsInt("Введите количество людей, которые заходят в лифт:");

            $pop =$ex_brain->checkNumberIsInt("Введите количество людей, которые выходят из лифта:");

            $to_floor =$ex_brain->checkNumberIsInt("Введите требумый этаж:");

            $ex_people->push($push);
            $ex_people->pop($pop);
            $ex_brain->checkPeople($ex_elevator, $ex_people, $to_floor);

            echo $colors->getColoredString("Сейчас лифт находиться на ".$ex_elevator->getFloor()." этаже.В лифте ".$ex_people->get_people()." человек(а).","white","green"). PHP_EOL;
            echo "Вы хотите управлять лифтом? (Y/N): ";
            $line = trim(fgets(STDIN));
            echo "******************************************************".PHP_EOL;
        }

        return 1;
    }
}


$var=new Application();
$var->run();




