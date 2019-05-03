<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 2019-04-29
 * Time: 20:52
 */

namespace App\Controller;


use App\Helpers\Router;

class FrontController
{
    public function start() {

        $router=new Router();

        $akcja=$router->getAction();


       // echo "Robie akcje: $akcja";

        $clasa=$router->getClassName();

        echo "<br>Nasza klasa to $clasa<hr>";


        if(class_exists($clasa)) {

            $aplikacja=new $clasa;


            $aplikacja->index();



        } else {
            echo "Nie ma takiej  klasy/akcji glupolu";
        }





    }


}


/*
 * Ternary Operators
 *
 * Jak dziala operator warunkowy
 * te dwa kody to to samo
$imie=$warunek?'ana':'ola';

if($warunek==true) {
    $imie='ana';
}
else {
    $imie='ola';
}*/