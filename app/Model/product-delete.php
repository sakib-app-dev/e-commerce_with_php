<?php

// include_once"./app/class/Category.php";

include_once"./../Controller/Category.php";

// echo $_POST['category_name'];
$id=$_GET['id'];
$category= new Category;
$category->deleteCategory($id);
header('Location:  ./../../views/admin/category-list.php' );
?>