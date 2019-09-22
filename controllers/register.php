<?php

//print_r($_COOKIE);
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){

    $name = $validate->text('name');
    $day = $validate->select_day('day');
    $month = $validate->select_month('month');
    $year = $validate->select_year('year');
    $location = $validate->emplacement('location');
    $genre = $validate->radio('sexy');
    $email = $validate->email_or_phone('email_or_phone');
    $password = $validate->password('password');



    if($validate->success() == true){

        $row = $db->get('users', ['email', '=', $email]);

        if($row->count() == 1){
            $validate->flash['row_email'] = 'This email or number already exists';
        }else{
            $result = $db->insert('users', ['name' => $name, 'day' => $day, 'month' => $month,
                'year' => $year, 'location' => $location, 'genre' => $genre,
                'email' => $email, 'password' =>$password
            ]);
            //var_dump($result); die(1);
            if(!$result){
                header('Location:?view=register');
            }else{
                header('Location:?view=login');
            }
        }

    }
}

include 'controllers/login.php';

