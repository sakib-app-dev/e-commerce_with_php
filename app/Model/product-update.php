<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo 'Only post req allow';
    die();
}
include_once"./../Controller/Product.php";


$product= new Product;
$r=$product->updateProduct($_POST);




header('Location: ./../../views/admin/product-list.php' );
