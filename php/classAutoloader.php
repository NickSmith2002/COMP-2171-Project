<?php

//When you want to use a class from the classes directory:
//include this php script with: include 'classAutoloder.php'
//it will allow you to access all classes without having to include each file

spl_autoload_register('myAutoLoader');
spl_autoload_register('myAutoLoader2');
spl_autoload_register('myAutoLoader3');


function myAutoLoader($className){
    $path = "../classes/businessLogicLayer/";
    $extension = ".class.php";
    $fullPath = $path.$className.$extension;

    if (!file_exists($fullPath)) {
        return false;
    }
    include_once $fullPath;
}

function myAutoLoader2($className){
    $path = "../classes/dataManagement/";
    $extension = ".class.php";
    $fullPath = $path.$className.$extension;

    if (!file_exists($fullPath)) {
        return false;
    }
    include_once $fullPath;
}

function myAutoLoader3($className){
    $path = "../classes/presentationLayer/";
    $extension = ".class.php";
    $fullPath = $path.$className.$extension;

    if (!file_exists($fullPath)) {
        return false;
    }
    include_once $fullPath;
}

?>