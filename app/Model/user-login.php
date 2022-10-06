<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo 'Only post req allow';
    die();
}
include_once"./../Controller/User.php";

$user= new User;
session_start();
if($user=$user->UserLogin($_POST)){
    $_SESSION['id'] =$user['id'];
    $_SESSION['name'] =$user['first_name'];
    header('Location:  ./../../views/users/index.php');
}else{
    header('Location:  ./../../views/users/login.php');
}


?>