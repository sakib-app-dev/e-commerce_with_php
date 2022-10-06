<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once "./include/head.php"; ?>
<title>Show Category Info</title>
</head>
<body>

    <!-- Side-Nav -->
    <?php include_once "./include/side-nav.php"; ?>
    <!-- top nav -->
    <?php include_once "./include/top-nav.php"; ?>
   
    
    <?php

$data=new Category;
$categoryInfo=$data->editCategory($_GET['id']);

?>

<div class="container mt-5 bg-light">
    <div class="row mt-5">
        <div class="offset-md-2 col-md-8 mt-5">
                <h1>
               Category Name: <?= $categoryInfo['category_name'];?>
                </h1>
                <hr>
                <p>Category Description: <?= $categoryInfo['description'];?></p>

        </div>
    </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>