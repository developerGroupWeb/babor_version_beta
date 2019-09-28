
<?php
    include 'register.php';

    $all = $db->findBy('users', 'ORDER BY id DESC');
    $users = $all->results();

    // randomize the order in users table
    shuffle($users);

    $first = $all->first();
    $data_date = [$first->month, $first->day, $first->year];
    $format_date = implode('/', $data_date);
    $age = $all->getAge($format_date);
