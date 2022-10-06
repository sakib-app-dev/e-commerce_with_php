<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once"./include/head.php";?>
    <title>Register</title>
</head>
<body>
   <!-- Nav -->
   <?php include_once "./../../views/users/include/nav.php"; ?>
    <div class="container mt-5" >
        <div class="row mt-5">
          
            <div class="offset-md-1 col-md-10 " style="justify-content: center;">
                
                <div class="bg-white border rounded mt-5" >
                    <div><img src="assets/images/logo1.png" alt="" srcset="" class="img-fluid reg-img"></div>
                    <div style="border-bottom: 3px solid black"></div>
                    <div class="w-100 p-4 d-flex justify-content-center pb-4 " style="background-color:teal; color: white;">



                        <form style="width: 50rem;" action="./../../app/Model/user-store.php" method="POST">


                          <div class="row" >
                            <div class="col-md-6">
                              <div class="form-group form-outline">
                              <label for="first_name">First Name:</label>
                              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First name....">
                            </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group form-outline">
                              <label for="last_name">Last Name:</label>
                              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name....">
                            </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group form-outline">
                                <label for="phone">Phone:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone no....">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-outline">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email" name="email"placeholder="Enter email....">
                              </div>
                            </div>


                            <div class="form-group form-outline">
                              <label for="adddress">Address:</label>
                              <textarea class="form-control" name="address" id="address"  rows="3" ></textarea>
                            </div>
                            <div class="form-group form-outline">
                              <label for="gender">Gender:</label>
                              <select class="form-select form-control" name="gender" aria-label="Default select example">
                                <option selected disabled>Select....</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                              </select>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group form-outline mt-3 mb-2">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password...">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-outline mt-3 mb-2">
                                <label for="confirm_password"> Confirm Password:</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password...">
                              </div>
                            </div>
                            
                          </div>
    
                            
                           

                            

                            
                            <div class="d-grid gap-2">
                              <input type="submit" style="background-color: darkslateblue;; color:white; font-weight: 500;" class="btn" name="btn">
                                <!-- <button class="btn " style="background-color: darkslateblue;; color:white; font-weight: 500;" type="button">Register</button> -->
                            </div>
                            
                          </form>
                        </div>
                        
                </div>
            </div>

            
        </div>
    </div>
</body>
</html>