<?php
session_start();
if(isset($_SESSION['id'])){
  header('Location:  ./index.php');

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once"./include/head.php";?>
    <title>Log-In</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="offset-md-1 col-md-10 " style="justify-content: center;">
              
                
                <div class="bg-white border rounded mt-5">
                  <div class="row">
                    <div class="col-md-4 py-5 ms-5" style="background-color: darkslateblue;">
                      <img src="./../../assets/users/images/logo1.png" class="img-fluid" alt="">
                      <div style="border-end: 3px solid red;"></div>
                    </div>
                    <div class="col-md-6" style="background-color: orangered;">
                     
                      <div class="w-100 p-4 d-flex justify-content-center pb-4 mt-5" style="color: white;">
                        <form style="width: 22rem;" action="./../../app/Model/user-login.php" method="POST">
                            <div class="form-group form-outline">
                              <label for="email">Email address:</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email....">
                              
                            </div>
                            <div class="form-group form-outline mt-3">
                              <label for="password">Password:</label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password...">
                            </div>
                            
                            <div class="d-grid gap-2">
                              <input type="submit" name="Log-in" class="btn">
                            </div>
                            <div style="text-align: center" class="mb-5"> Not a member? <a href="register.php" style="color:#1266f1">Register</a></div>
                            
                          </form>
                        </div>
                    </div>
                  </div>

                    
                        
                </div>
            </div>

            </section>
        </div>
    </div>
</body>
</html>