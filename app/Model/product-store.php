<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo 'Only post req allow';
    die();
}
include_once"./../Controller/Product.php";


$product= new Product;

if($product->createProduct($_POST)){

    header('Location:  ./../../views/admin/product-list.php' );
}else{
    header('Location:  ./../../views/admin/product-add.php' );
}