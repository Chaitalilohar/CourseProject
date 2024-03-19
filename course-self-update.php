<?php
extract($_GET);
include 'header.php';
if(isset($_REQUEST['update'])){
    extract($_POST);
    $q3="UPDATE `categories` SET `name`='$name',`Price`='$_price' where  `cat_id`='$cat_id'";
    $result3=mysqli_query($conn,$q3);
    if($result3){
        echo "<script>alert('updated successfully'); window.location='index.php';</script>";
    }
}
$q="select * from categories where cat_id='$cat_id' ";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($result);
?>
<html>
    <body>
    <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Forms</h5>
              <div class="card">
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                      <input name="cat_id" value=<?php echo $row['cat_id'];?> type="hidden" class="form-control">
                    </div> 
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name of the Course:</label>
                      <input name="name" value=<?php echo $row['name'];?> type="text" class="form-control">
                    </div> 
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Price of the Course:</label>
                      <input name="price" value=<?php echo $row['Price'];?> type="text" class="form-control">
                    </div>           
                    <button type="submit" name='update' class="btn btn-primary">Update</button>
                  </form>
                </div>
              </div>

    </body>
</html>
<?php
include 'footer.php';
?>