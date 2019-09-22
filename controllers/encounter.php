
<?php
    include 'register.php';

    $all = $db->findAll('users');
    $users = $all->results();

    foreach ($users as $user){

        $data_date = [$user->month, $user->day, $user->year];
        $format_date = implode('/', $data_date);
        $ag = $all->getAge($format_date);

        //echo $user->name.', '.$ag.' **** ';
    }

    $first = $all->first();
    $data_date = [$first->month, $first->day, $first->year];
    $format_date = implode('/', $data_date);
    $age = $all->getAge($format_date);

