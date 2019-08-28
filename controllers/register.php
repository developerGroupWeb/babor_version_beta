<?php

$validate = new Validator;
//print_r($_COOKIE);
if(isset($_POST['submit'])){

    $validate->text('Prénom');
    $validate->select_day('day');
    $validate->select_month('month');
    $validate->select_year('year');
    $validate->emplacement('location');
    $validate->radio('sexy');
    $validate->email_or_phone('email_or_phone');
    $validate->password('password');
    $validate->remember('remember');

    //var_dump($validate->success());
}

