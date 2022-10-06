<?php
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo 'Only post req allow';
    die();
}
include_once"./../Controller/Cart.php";


$cart= new Cart;

if($cart->addToCart($_POST)){
// $cart['']
    header('Location:  ./../../views/users/checkout.php' );
}else{
    header("Location: " . $_SERVER["HTTP_REFERER"]);
}


?>