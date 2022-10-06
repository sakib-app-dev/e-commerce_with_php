<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "./include/head.php"; ?>
    <title>Dashoard Index</title>
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
        <div class="col-md-12">
            <div class="main-content">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body  text-center">
                            <div class=" w-100 ">
                                <div class=" px-2">
                                    <label for="caregory" class="mb-4 h1 text-dark">Dashboard</label>
                                    <table class="table table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name Of All Product</th>
                                                <th scope="col">Total Sells </th>
                                                <th scope="col">Benifit Of Product</th>
                                                <th scope="col">Total Cost</th>
                                                <th scope="col">Income</th>
                                                <th colspan="3" scope="col">Action</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>296</td>
                                                <td>Lorem, ipsum dolor.</td>
                                                <td>3350</td>
                                                <td>3500</td>
                                                <td><button type="submit" class="btn btn-info w-100"><a href="categoryshow.html">View</a></button></td>
                                                <td><button type="submit" class="btn btn-primary w-100"><a href="productedit.html">UPDATE</a></button></td>
                                                <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>560</td>
                                                <td>Lorem, ipsum dolor.</td>
                                                <td>3350</td>
                                                <td>3500</td>
                                                <td><button type="submit" class="btn btn-info w-100"><a href="categoryshow.html">View</a></button></td>
                                                <td><button type="submit" class="btn btn-primary w-100"><a href="productedit.html">UPDATE</a></button></td>
                                                <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>384</td>
                                                <td>Lorem, ipsum dolor.</td>
                                                <td>3350</td>
                                                <td>3500</td>
                                                <td><button type="submit" class="btn btn-info w-100"><a href="categoryshow.html">View</a></button></td>
                                                <td><button type="submit" class="btn btn-primary w-100"><a href="productedit.html">UPDATE</a></button></td>
                                                <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                            </tr>
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