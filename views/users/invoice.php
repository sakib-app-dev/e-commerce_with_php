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



      <div class="col-md-12">

      <!-- invoice -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-center">Billing Address</h4>
            <hr style="background-color: gray;">
            <p>Customer Name</p>
            <p class="">Customer Address</p>
            <p>Customer Phone</p>
            <p>Customer Email</p>
          </div>
        </div>
        <div class="row">
          <table class="table table-bordered">
            <tr>
              <th>Product</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Amount</th>
            </tr>
            <tr>
              <td>Shirt</td>
              <td>2</td>
              <td>300</td>
              <td>600</td>
            </tr>
            <tr>
              <td>Shirt</td>
              <td>2</td>
              <td>300</td>
              <td>600</td>
            </tr>
            <tr>
              <th colspan="3">Sub-Total</th>
              <td>1200</td>
            </tr>
            <tr>
              <th colspan="3">Bkash Charge</th>
              <td>10</td>
            </tr>
            <tr>
              <th colspan="3">Payment Method</th>
              <td>Bkash</td>
            </tr>
            <tr>
              <th colspan="3">Total Price</th>
              <td>1210</td>
            </tr>

          </table>
        </div>
        <button class="btn btn-primary " type="download"> Download</button>
        <button class="btn btn-success " type="download"> Print Now</button>
      </div>
      <!-- invoice -->
      </div>

      <!-- footer -->
      <?php include_once "./../../views/users/include/footer.php"; ?>


    </div>
  </div>
  <script src="./../../assets/users/js/bootstrap.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

</body>

</html>