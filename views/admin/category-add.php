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
                <div class="col-md-12 text-center d-flex">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-info">
                            <div class="card-body ">
                                <label for="caregory" class="my-4">
                                    <h2 class="text-center text-light">Category Form</h2>
                                </label>
                                <form action="./../../app/Model/category-store.php" method="POST" class="justify-content-center mt-4 py-4">
                                <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Enter Category Name....">
                                <br>
                                <input type="text" name="category_discription" class="form-control" id="category_discription" placeholder="Enter Category Description">
                                <br>
                                    <button type="submit" class="btn btn-warning mx-2">Create Category</button>
                                    
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