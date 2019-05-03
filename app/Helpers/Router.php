<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 2019-04-29
 * Time: 21:12
 */

namespace App\Helpers;


class Router
{
    public function getAction(){

        $akcja=isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'Main';



        $newakcja=str_replace('/','',$akcja);

        $akcjadobra=ucfirst($newakcja);

        return $akcjadobra;
    }

    public function getClassName() {

        $ackja=$this->getAction();

        $nazwa="App\Controller\\".$ackja ."Controller";


        return $nazwa;


    }



}