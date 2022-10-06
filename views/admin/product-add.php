<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "./include/head.php"; ?>
    <title>Dashoard Category Add</title>

</head>

<body>
    <!-- Side-Nav -->
    <?php include_once "./include/side-nav.php"; ?>
    <!-- top nav -->
    <?php include_once "./include/top-nav.php"; ?>




    
    <!-- Main Wrapper -->
    <div class=" my-container active-cont">
        <br>
        <br>
        <div class="col-md-10">
            <div class="main-content">
                <div class="col-md-10 text-center d-flex">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <div class="card bg-info">
                            <div class="card-body ">
                                <label for="caregory" class="my-4">
                                    <h2 class="text-center text-light">Product Form</h2>
                                </label>
                                <form action="./../../app/Model/product-store.php" method="POST" enctype="multipart/form-data"  class="justify-content-center mt-1 py-1">
                                <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Enter Product Name....">
                                <br>
                                <input type="text" name="product_details" class="form-control" id="product_details" placeholder="Enter Product Description">
                                <br>
                                <input type="number" name="price" class="form-control" id="price" placeholder="Enter Product Price..">
                                <br>
                                <input type="number" name="qty" class="form-control" id="qty" placeholder="Enter Product Quantity..">
                                <br>

                                <?php
                                $categoryObj= new Category;
                                $category=$categoryObj->viewCategory();
                                ?>
                                <select class="form-select" name="category" aria-label="Default select example">
                                    <option selected disabled>Select Category</option>
                                    <?php foreach ($category as $data) { ?>
                                    <option value="<?php echo $data['category_name']; ?>" ><?php echo $data['category_name']; ?></option>
                                    <?php } ?>
                                </select>
                                <br>
                                <input type="file" name="image" class="form-control" id="image">
                                <br>
                                    <button type="submit" class="btn btn-warning mx-2">Add Product</button>
                                    
                                    <button type="reset" class="btn btn-danger mx-2">Reset</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <!--Main Navigation-->

    <!--Main layout-->

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