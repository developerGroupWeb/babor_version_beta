<?php

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])){

    $log = $validate->email_or_phone('email_or_phone');
    $pass = $validate->password('password');

    if($validate->success() == true){

        $db = new Db();
        $result = $db->get('users', ['email', '=', $log]);

        if($result->count() == 0){
            $validate->flash['row_email'] = 'This email or number does not correspond to a user';
        }else{

            $result = $db->builderGet('users', ['email', '=', $log, 'and', 'password', '=', $pass]);

            if($result->count() == 0){
                $validate->flash['row_email'] = 'Your password is incorrect';
            }else{

                $_SESSION['email'] = $log;
                $_SESSION['password'] = $pass;
                header('Location:?view=profile');
            }
        }


    }
}