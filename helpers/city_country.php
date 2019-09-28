<?php
function city_country($user){

    $detach = explode(',', $user->location);
    $city = ucfirst($detach[0]);
    $country = strtoupper(end($detach));
    return (object)['city' => $city, 'country' => $country];
}