
<?php
    include 'register.php';

    $users = $db->findAll('users');
    var_dump($users->first());