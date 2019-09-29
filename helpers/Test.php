<?php
/*
require_once __DIR__ . '/Db.php';
$test =  new Db();
$t = $test->insert('test', ['name' => 'Amaelle', 'email' => null]);
var_dump($t);
if($t){
    echo 'success';
}else{
    echo 'Echec';
}*/

$uri = "http://www.babor_version_beta.com/?view=register";
$detach = explode('/', $uri);
$path = str_replace(end($detach), '?view', $uri);

echo $path;