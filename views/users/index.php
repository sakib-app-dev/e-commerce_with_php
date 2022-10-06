<?php
/*
include_once"./../../app/Controller/Category.php";

$categoryObj= new Category;

$category=$categoryObj->viewCategory();
// print_r($data);
// exit();

*/
?>
<!-- head -->
 

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstarp  -->
        <!-- <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <link rel="stylesheet" href="./../../assets/users/css/bootstrap.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="./../../assets/users/css/style.css">
        <title>Online Grocery Shop</title>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row">

                    <!-- Nav -->
                    <?php include_once "./../../views/users/include/nav.php"; ?>
                    <!-- Banner -->
                    <?php include_once "./../../views/users/include/banner.php"; ?>
                    <!-- offer -->
                    <?php include_once "./../../views/users/include/offer.php"; ?>
                    <!-- products -->
                    <?php include_once "./../../views/users/include/products.php"; ?>
                    <!-- testimonial -->
                    <?php include_once "./../../views/users/include/testimonial.php"; ?>
                    <!-- contact -->
                    <?php include_once "./../../views/users/include/contact.php"; ?>
                    <!-- footer -->
                    <?php include_once "./../../views/users/include/footer.php"; ?>


            </div>
        </div>
        <script src="./../../assets/users/js/bootstrap.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    </body>

</html>