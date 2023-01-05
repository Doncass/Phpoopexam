<?php

require 'vendor/autoload.php';

use Donat\Phpoopexam\views ;
use Donat\Phpoopexam\framework\Router ;

$requestUri = str_replace('/Phpoopexam/', '' , $_SERVER['REQUEST_URI']);
$registrationId = $_SERVER['QUERY_STRING'];



$FormObj = new \Donat\Phpoopexam\views\Submitform() ;
$FormObj->submit();




