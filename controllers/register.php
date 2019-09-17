<?php

$validate = new Validator;

//print_r($_COOKIE);
if(isset($_POST['register'])){

    $validate->text('name');
    $validate->select_day('day');
    $validate->select_month('month');
    $validate->select_year('year');
    $validate->emplacement('location');
    $validate->radio('sexy');
    $validate->email_or_phone('email_or_phone');
    $validate->password('password');
    $validate->remember('remember');


    if($validate->success() === 'success'){
        $insert = new Db();
        $result = $insert->insert('users', [
                                        $validate->text('name'),
                                        $validate->select_day('day'),
                                        $validate->select_month('month'),
                                        $validate->select_year('year'),
                                        $validate->emplacement('location'),
                                        $validate->radio('sexy'),
                                        $validate->email_or_phone('email_or_phone'),
                                        $validate->password('password')
            ]);
        //var_dump($result);
        header('Location:?view=login');
    }
}

