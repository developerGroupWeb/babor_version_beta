<?php
function format_date($user){
    $data_date = [$user->month, $user->day, $user->year];
    return implode('/', $data_date);
}