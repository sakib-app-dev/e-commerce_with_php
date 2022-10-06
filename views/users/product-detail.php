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

      <?php

      $id = $_GET['id'];

      $product = new Product;
      $data = $product->editProduct($id);

      ?>



      <!-- Product Details -->


      <h1 style="text-align:center;">Product Details</h1>
      <div class="offset-md-4 col-md-4 mb-3" style="border-bottom: 3px solid orangered"></div>
      <div class="container">
        <form action="./../../app/Model/cart.php?id=<?= $data['id'] ?>" method="POST">
        <div class="row mt-5">
            <div class="col-md-4">
              <img class="capimg" src="<?= $data['image']; ?>" alt="img">
            </div>
            <div class="offset-md-2 col-md-6">
              <h4><?= $data['product_name'];?></h4>
              <p><?= $data['product_details'];?></p>
              <h2 class="mt-5" style="color:orange ;"><?= $data['price']; ?> BDT</h2>

              <div class="quantity">
                <p class="mt-5">Quantity: </p>
                <input type="number" name="qty" style="margin:40px;width:60px;height:48px;text-align: center;" step="1" min="1" value="1" name="" id="" col="4">
              </div>
              <div class="last mt-5">
                <input type="submit" name="buy_now" value="Buy Now" class="btn btn-primary btn-lg">
                <!-- <a href="checkout.php" class="btn btn-primary btn-lg">Add to Cart</a> -->

              </div>




            </div>
          </div>
        </form>
        <!-- Product Details End -->


        <!-- related product -->

        <div class="row mt-5">
          <h3>Related Products:</h3>
        </div>
        <div class="row mt-3 mx-auto">
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="./../../assets/users/images/cap.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="./../../assets/users/images/cap.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="./../../assets/users/images/cap.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <img src="./../../assets/users/images/cap.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- related product  end-->



      <!-- footer -->
      <?php include_once "./../../views/users/include/footer.php"; ?>


    </div>
  </div>
  <script src="./../.././../../assets/users/js/bootstrap.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

</body>

</html>