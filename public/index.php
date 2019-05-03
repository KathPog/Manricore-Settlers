<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 2019-04-29
 * Time: 20:26
 */

require_once __DIR__ . '/../vendor/autoload.php';

$front=new App\Controller\FrontController();

$front->start();
