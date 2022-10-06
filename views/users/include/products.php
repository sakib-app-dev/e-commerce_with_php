<!-- products -->

<section>
  <div class="container mt-5">
    <h1 style="text-align: center">Feature Products</h1>
    <div class="offset-md-4 col-md-4 mb-3" style="border-bottom: 3px solid orangered"></div>
    <div class="row">
    <?php foreach ($products as $data) { ?>
      <div class="col-md-3 py-1">
        <div class="card" style="width: 17rem;">
          <img src="<?php echo $data['image']; ?>" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title"><?php echo $data['price']; ?>BDT</h5>
            <p class="card-text"><?php echo $data['product_name']; ?></p>
            <p>
              <span>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                <i class="fa fa-star text-warning" aria-hidden="true"></i>
              </span>
            </p>
            <a href="./product-detail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">BUY NOW</a>
          </div>
        </div>
      </div>
      <?php } ?>
      
      
    </div>
  </div>
</section>
<!-- products-end -->