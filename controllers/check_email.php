<?php
spl_autoload_register(function ($class){
    require_once ('../models/'.$class.'.php');
});
$validate =  new Validator;
$email = $validate->post('string');

$err = [];
$db = new Db;
$row = $db->get('users', ['email', '=', $email]);

if($row->count() == 0){
    $err['error'] = "This email or number doesn't correspond to a user";
}
echo json_encode($err);



