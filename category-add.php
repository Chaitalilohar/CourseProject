<?php
include 'header.php';

?>
<html>
    <body>
    <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Forms</h5>
              <div class="card">
                <div class="card-body">
                  <form action="category-add-save.php" method="post">
                    <div class="mb-3">
                      <label for="" class="form-label"> Enter Category</label>
                      <input name="name" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"> Enter Price:</label>
                      <input name="price" type="number" placeholder="Enter Price" class="form-control">
                    </div>               
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>

    </body>
</html>
<?php
include 'footer.php';
?>