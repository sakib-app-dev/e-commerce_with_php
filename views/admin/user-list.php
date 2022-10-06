<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "./include/head.php"; ?>
    <title>Dashoard User Detels</title>

</head>

<body>

    <!-- Side-Nav -->
    <?php include_once "./include/side-nav.php"; ?>
    <!-- top nav -->
    <?php include_once "./include/top-nav.php"; ?>


   
    <?php
    $userInfo=new User;
    $users=$userInfo->viewUser();

    
    ?>
    <!-- Main Wrapper -->
    <div class=" my-container active-cont">
        <!-- Top Nav -->

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-10">

            <div class="main-content">


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body  text-center">
                            <div class=" w-100 ">
                                <div class=" px-2">


                                    <label for="caregory" class="mb-4 h1 text-dark">List User</label>
                                    <a href="./createuser.html"><button class="btn btn-primary btn-xs" type="button">Create</button></a>
                                    <table class="table table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">User</th>
                                                <th scope="col">Device</th>
                                                <th scope="col">Qulification</th>
                                                <th colspan="2" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $sl = 0;
                                            foreach ($users as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= ++$sl; ?></th>
                                                <td><?php echo $data['first_name'];?></td>
                                                <td><?php echo $data['email'];?></td>
                                                <td><?php echo $data['gender'];?></td>
                                                <td>
                                                    <a href="user-details.php?id=<?= $data['id'];?>">Show</a>
                                                </td>
                                                <td><button type="submit" class="btn btn-danger w-100">Delete</button></td>
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