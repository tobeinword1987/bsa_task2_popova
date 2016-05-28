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

        while(($line!='N') and  ($line!='n'))
        {
            $floor = $ex_elevator->getFloor();

            echo "Сейчас лифт находиться на $floor этаже. В лифте ".$ex_brain->get_people()." человек(а)." . PHP_EOL;

            echo "Введите требумый этаж:";
            $to_floor = trim(fgets(STDIN));
            echo "Введите количество людей, которые заходят в лифт:";
            $push = trim(fgets(STDIN));
            echo "Введите количество людей, которые выходят из лифта:";
            $pop = trim(fgets(STDIN));

            $ex_brain->push($push);
            $ex_brain->pop($pop);
            $ex_brain->checkPeople($ex_elevator, $to_floor);

            echo "Сейчас лифт находиться на ".$ex_elevator->getFloor()." этаже.В лифте ".$ex_brain->get_people()." человек(а)." . PHP_EOL;
            echo "Вы хотите уравлять лифтом? (Y/N): ";
            $line = trim(fgets(STDIN));
            echo "******************************************************".PHP_EOL;
        }

        return 1;
    }
}


$var=new Application();
$var->run();




