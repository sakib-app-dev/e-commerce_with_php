<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "./include/head.php"; ?>
    <title>Dashoard Product Show</title>

</head>

<body>
    <!-- Side-Nav -->
    <?php include_once "./include/side-nav.php"; ?>
    <!-- top nav -->
    <?php include_once "./include/top-nav.php"; ?>

    <!-- Main Wrapper -->
    <div class=" my-container active-cont">
        <!-- Top Nav -->

        <!--End Top Nav -->


        <?php

$user=new User;
$data=$user->editUser($_GET['id']);

// echo "<pre>";
// print_r($data);
// exit();



?>


        <!-- Product Details -->


        <h1 style="text-align:center;">User Details</h1>
        <div class="offset-md-4 col-md-4 mb-3" style="border-bottom: 3px solid orangered"></div>
        <div class="container border m-3 p-2 bg-light" >
            <div class="row mt-5">
                <div class="col-md-4">
                    <img class="capimg" src="<?= $data['image']??['Img nai'];?>" alt="Img" height="400px">
                </div>
                <div class="offset-md-2 col-md-6">
                    <h6><?= $data['first_name'];?></h6>
                    <p><?= $data['last_name'];?></p>
                    <p><?= $data['phone'];?></p>
                    <p><?= $data['email'];?></p>
                    <p><?= $data['gender'];?></p>
                    
                    
                    <a href="./../../app/Model/product-delete.php?id=<?= $data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are You Sure Want to Delete ?')">Block</a>
                </div>
                
            </div>
        </div>
        <!-- Product Details End -->
    </div>
    
    
    <!-- bootstrap js -->
    <script>
        var menu_btn = document.querySelector("#menu-btn");
        var sidebar = document.querySelector("#sidebar");
        var container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav");
            container.classList.toggle("active-cont");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>