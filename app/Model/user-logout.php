<?php


include_once"./../Controller/User.php";

$user= new User;
session_start();

session_destroy();
header('Location:  ./../../views/users/index.php');



?>