<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "./include/head.php"; ?>
    <title>Dashoard Product List</title>

</head>

<body>
    <!-- Side-Nav -->
    <?php include_once "./include/side-nav.php"; ?>
    <!-- top nav -->
    <?php include_once "./include/top-nav.php"; ?>
    <?php
    $productObj= new Product;
    $products=$productObj->viewProduct();
    ?>

    <!-- Main Wrapper -->
    <div class=" my-container active-cont">
        <!-- Top Nav -->

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-12">

            <div class="main-content">


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body  text-center">
                            <div class=" w-100 ">
                                <div class=" px-2">
                                    <label for="caregory" class="mb-4 h1 text-dark">Product List</label>
                                    <table class="table table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#SL</th>
                                                <th scope="col">Name Of Product</th>
                                                <th scope="col">Image </th>
                                                <th scope="col">Product Details</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Category</th>
                                                <th colspan="3" scope="col">Action</th>

                                        </thead>
                                        <tbody>
                                            <?php
                                            $sl = 0;
                                            foreach ($products as $data) { ?>
                                                <tr>
                                                    <th scope="row"><?php echo ++$sl; ?></th>
                                                    <td><?php echo $data['product_name']; ?></td>
                                                    <td><img src="<?php echo $data['image']; ?>" alt="" srcset="" height="80px"></td>
                                                    <td><?php echo $data['product_details']; ?></td>
                                                    <td><?php echo $data['price']; ?></td>
                                                    <td><?php echo $data['qty']; ?></td>
                                                    <td><?php echo $data['category']; ?></td>
                                                    <td><a href="./product-show.php?id=<?= $data['id']; ?>"><button type="submit" class="btn btn-info w-100">View</button></a></td>
                                                    <td><a href="./product-edit.php?id=<?= $data['id']; ?> "><button type="submit" class="btn btn-primary w-100">UPDATE</button></a></td>
                                                    <td><a href="./../../app/Model/product-delete.php?id=<?= $data['id']; ?> " onclick="return confirm('Are You Sure Want to Delete ?')"><button type="submit" class="btn btn-primary w-100">Delete</button></a></td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    </div>
    </div>
    </div>
    <!--Main Navigation-->

    <!--Main layout-->


    </div>
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