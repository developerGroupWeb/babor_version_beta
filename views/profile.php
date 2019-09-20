<?php
if(isset($_SESSION['email']) && isset($_SESSION['password'])){
    echo $_SESSION['email'];
}else{
    header('Location:?view=login');
}