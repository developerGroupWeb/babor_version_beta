<?php
include 'helpers/city_country.php';
include 'helpers/paginate.php';

spl_autoload_register(function ($class){
    require_once realpath('models/'.$class.'.php');
});
$validate = new Validator;
$db = new Db;