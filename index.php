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

            do
            {
                echo "Введите количество людей, которые заходят в лифт:";
                $push = trim(fgets(STDIN));
                if(!preg_match("/^[0-9]{1}$/",$push))
                $ex_brain ->print_error("введите натуральное целое число!");
                var_dump(preg_match("/^[0-9]{1}$/",$push));
            }
            while(preg_match("/^[0-9]{1}$/",$push)==false);

            echo "Введите количество людей, которые выходят из лифта:";
            $pop = trim(fgets(STDIN));
            echo "Введите требумый этаж:";
            $to_floor = trim(fgets(STDIN));

            $ex_people->push($push);
            $ex_people->pop($pop);
            $ex_brain->checkPeople($ex_elevator, $ex_people, $to_floor);

            echo $colors->getColoredString("Сейчас лифт находиться на ".$ex_elevator->getFloor()." этаже.В лифте ".$ex_people->get_people()." человек(а).","white","green"). PHP_EOL;
            echo "Вы хотите уравлять лифтом? (Y/N): ";
            $line = trim(fgets(STDIN));
            echo "******************************************************".PHP_EOL;
        }

        return 1;
    }
}


$var=new Application();
$var->run();




