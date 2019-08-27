<?php

spl_autoload_register(function ($class){

    require_once realpath('classes/'.$class.'.php');

});

$view = htmlspecialchars($_GET['view']);

$views = scandir('views');
if(in_array($view.'.php', $views)){

    $content = "views/".$view.'.php';

}else{
    header("Location:main.php");
}

$controllers = scandir('controllers');
if(in_array($view.'.php', $controllers)){

    include('controllers/'.$view.'.php');
}


include('template/base.php');