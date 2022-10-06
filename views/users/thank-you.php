<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once "./include/head.php"; ?>
  <title>Product List</title>
</head>

<body>

  <div class="container-fluid">
    <div class="row">

      <!-- Nav -->
      <?php include_once "./../../views/users/include/nav.php"; ?>





      <!-- Thank You -->
      
      <div class="offset-md-3 col-md-6">
        <h1 style="text-align:center;">Your Order Placement is Successful!</h1>
        <h3 style="text-align:center;">Thanks for Staying with Us </h3>
        <img class="tick" src="./../../assets/users/images/tick.png">
        
        
        <a href="invoice.php" class="btn btn-success btn-lg mt-3 mx-auto d-grid mb-3">Download Invoice</a>
      </div>
      <!-- Thank You End -->



      <!-- footer -->
      <?php include_once "./../../views/users/include/footer.php"; ?>
      <!-- footer -->


    </div>
  </div>
  <script src="./../../assets/users/js/bootstrap.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

</body>

</html>