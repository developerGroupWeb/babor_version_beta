<?php
$all = $db->findAll('users');
$users = $all->results();



//var_dump($all->count());