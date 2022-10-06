<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo 'Only post req allow';
    die();
}
include_once"./../Controller/User.php";

$user= new User;

if($user->createUser($_POST)){
    header('Location:  ./../../views/users/index.php' );
}else{
    header('Location:  ./../../views/users/register.php' );
}