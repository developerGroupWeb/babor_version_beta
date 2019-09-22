
<?php
        spl_autoload_register(function ($class){
            require_once ('../models/'.$class.'.php');
        });
        $validate = new Validator;
        $db = new Db;

              $name = $validate->post('name');
              $day = $validate->post('day');
              $month = $validate->post('month');
              $year = $validate->post('year');
              $location = $validate->post('location');
              $genre = $validate->post('genre');
              $email = $validate->post('email');
              $password = sha1($validate->post('pass'));

        $err = [];
        if($validate->success() == true) {

            $row = $db->get('users', ['email', '=', $email]);

            if ($row->count() == 1) {
                $err['error'] = 'This email or number already exists';
            } else {
                $result = $db->insert('users', ['name' => $name, 'day' => $day, 'month' => $month,
                    'year' => $year, 'location' => $location, 'genre' => $genre,
                    'email' => $email, 'password' => $password
                ]);
                //var_dump($result); die(1);
                if (!$result) {
                    $err['error_save'] = 'Error saving, try again after';
                }
            }
            echo json_encode($err);
        }