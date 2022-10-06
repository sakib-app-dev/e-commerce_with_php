<?php

include_once"./../../app/Controller/Category.php";
include_once"./../../app/Controller/Product.php";
include_once"./../../app/Controller/User.php";
include_once"./../../app/Controller/Cart.php";
$categoryObj= new Category;
$category=$categoryObj->viewCategory();
$productObj= new Product;
$products=$productObj->viewProduct();
// $userObj= new User;
// $user=$userObj->viewUser();
// print_r($data);
// exit();
session_start();

?>
<!-- top-nav -->
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 py-1" style="color:white; background-color:crimson">
                <span class="ms-5 ">Help-line: 01XXX-XXXXX</span> <span class="ms-5">Call Center Time: ( 24X7 ) 8.00am - 8.00pm</span>  <span class=" ms-5">mail@company.com</span>
            </div>
        </div>
    </div>

    <!-- top-nav -->
    <div class="container-fluid mt-2">
        <div class="row">

            <!-- header -nav  -->
            <header class="sticky-top">
                  <div class="logo">
                      <a class="navbar-brand " href="index.html"><img src="assets/images/logo.png" alt="" class="img-fluid" ></a>
                  </div>
                <nav class="navbar navbar-expand-lg " style="background-color: orangered;">
                    <div class="container-fluid">
                      
                      
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <form class="d-flex search-box">
                        <input class="form-control ms-5 me-2" type="search" style="width:300px" placeholder="Search" aria-label="Search">
                        <button class="btn bg-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                      </form>
                      <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="./product-list.php">Products</a>
                          </li>
                          <li class="nav-item">
                            
                            <a class=" nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                              Category
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="about-us.php">About Us</a>
                          </li>
                          <?php if(isset($_SESSION['id'])){ ?>
                          <li class="nav-item">
                            <a class="nav-link" href="about-us.html">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="badge bg-warning">4</span>
                              
                            </a>
                          </li>
                          <?php }?>
                         
                          <?php if(!isset($_SESSION['id'])){?>
                          <li class="nav-item">
                            <a class=" nav-link   me-2"  style="color: white;" href="login.php">LogIn</a>
                          </li>
                          <li class="nav-item">
                            <a class=" nav-link  " style="color: white;" href="register.php">Register</a>
                          </li>
                          <?php }else{ ?>
                            <li class="nav-item">
                            <a class=" nav-link   me-2"  style="color: white;" href="./../../app/Model/user-logout.php">Logout</a>
                          </li>
                          <?php }?>
                          
                        </ul>
                        
                      </div>
                    </div>

                  <!-- category -->

                  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Category</h5>
                      <hr>
                      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                      
                        
                        
                          <?php
                          foreach ($category as $data) { ?>
                            
                            <a class="dropdown-item" href="#"><?php echo $data['category_name'];?></a>
                            
                            <?php }?>
                          
                        
                    
                    </div>




<!-- category -->

                </nav>
                
            </header>

            <!-- header -nav  -->

        </div>
    </div>