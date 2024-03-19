<?php

include 'header.php';
$q="select * from transactions ";
$result=mysqli_query($conn,$q);

?>
	 
<div class="container-fluid">

<div class="col-lg-12 d-flex align-items-stretch">
  <div class="card w-100">
    <div class="card-body p-4">
      <h5 class="card-title fw-semibold mb-4">Details</h5>
      
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Sr.no</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Course Name</h6>
              </th> 
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Owned By</h6>
              </th>           
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Date</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Paid</h6>
              </th>
            </tr>
          </thead>
          <?php $number=1;
              while($row=mysqli_fetch_assoc($result)){

          ?>
          <tbody>
            <tr>       
             <?php 
              echo "<td>".$number."</td>
              <td>".$row['course_name']."</td>
              <td>".$row['name_applicant']."</td>
              <td>".$row['date']."</td>
              <td>".$row['price']."</td>";
                $number++;
            }
          ?> 
              </tr>                       
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>

<?php
include 'footer.php';
?> 