<?php
if(isset($_SESSION['email']) && isset($_SESSION['password'])) {

    $results = $db->get('users', ['email', '=', $_SESSION['email']]);
    $user = $results->first();

    $data_date = [$user->month, $user->day, $user->year];
    $format_date = implode('/', $data_date);
    $age = $results->getAge($format_date);

    $detach = explode(',', $user->location);
    $city = ucfirst($detach[0]);
    $country = strtoupper(end($detach));

    //var_dump($user);
}else{
    header('Location:?view=login');
}