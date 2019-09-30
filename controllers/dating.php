<?php
  require_once 'controllers/register.php';

    $all = $db->findBy('users', 'ORDER BY id DESC');
    $users = $all->results();



//var_dump($all->count());