<?php

require_once __DIR__ . '/Db.php';
$test =  new Db();
$t = $test->insert('test', ['name' => 'Amaelle', 'email' => null]);
var_dump($t);
if($t){
    echo 'success';
}else{
    echo 'Echec';
}