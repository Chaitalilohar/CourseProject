<?php
include 'header.php';
$q="select * from Categories where is_disabled=0";
$result=mysqli_query($conn,$q);
?>
<html>
    <body>
    <div class="container-fluid">

<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">All Categories  |<a href="category-add.php">Add New category</a></h5>
      
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Cat_id</h6>
              </th>
             <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Category</h6>
              </th>              
             <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Price</h6>
              </th>
             </tr>
          </thead>
          <tbody>
                
            <?php 
            while($cat=mysqli_fetch_assoc($result)){
                echo " <tr> <td>".$cat['cat_id']."</td>
                <td>".$cat['name']."</td>
                <td>".$cat['Price']."</td>
                <td><a onclick=\" return confirm('Are you sure want to update Course??')\"  class='text-primary' href='course-self-update.php?cat_id=".$cat['cat_id']."'>Update</a></td>
                <td><a onclick=\" return confirm('Are you sure want to delete Course??')\"  class='text-danger' href='course-delete.php?cat_id=".$cat['cat_id']."'>Delete</a></td></tr>";
            }
          ?> 
                                 
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
    </body>
</html>
<?php
include 'footer.php';
?>