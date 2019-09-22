<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['forget_pass'])){

    $log = $validate->email_or_phone('email_or_phone');

    if($validate->success() == true){

        $result = $db->get('users', ['email', '=', $log]);

        if($result->count() == 0){
            $validate->flash['row_email'] = 'This email or number does not correspond to a user';
        }else{
            $code = $validate->alphaNumCode(3);

            $row = $db->get('reset_password', ['email', '=', $log]);

            if($row->count() == 0){
                $insert = $db->insert('reset_password', ['email' => $log, 'code' => $code]);
                header('Location:?view=code&id='.$log);
            }else{
                $update = $db->update('reset_password', $log, ['code' => $code]);
                var_dump($update);die(1);

                header('Location:?view=code&id='.$log);
            }


        }

    }
}