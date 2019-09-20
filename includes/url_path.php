<?php
$uri = $_SERVER['REQUEST_URI'];
$detach = explode('/', $uri);
$path = str_replace(end($detach), '?view', $uri);