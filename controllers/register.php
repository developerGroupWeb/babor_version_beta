<?php

$validate = new Validator;

if(isset($_POST['submit'])){

    $validate->text('Prénom');
}

