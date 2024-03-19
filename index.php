<?php
include 'header.php';
$date=date('Y-m-d');

echo "<div class='mb-3 mb-sm-0'>
<h5 class='card-title fw-semibold'>Sales Overview</h5>
</div>";
$query="Select * from transactions where date='$date'";
$result=mysqli_query($conn,$query);

?>  
<html>
    <body>
    <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">            
                <div class="card-body p-4">
                  <h1>Welcome to Dashboard</h1>               
                </div>
                <div class="container-fluid">
       <div class="col-lg-4">
       <div class="col-lg-12">
                <!-- Daily Earnings -->
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold">Daily Earnings </h5>
                        <h4 class="fw-semibold mb-3">Rs.<?php 
                         $temp=0;
                            while($row=mysqli_fetch_assoc($result)){
                             
                              $temp=$temp+$row['price'];
                            }
                            echo $temp;
                        ?></h4>
                        <div class="d-flex align-items-center pb-1">
                          <span
                            class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-down-right text-danger"></i>
                          </span>
                          <p class="fs-3 mb-0">Date:<?php echo $date;?></p>
                        </div>                     
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-currency-dollar fs-6"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="earning"></div>
                </div>
              </div>
              <div class="col-lg-12">
                <!-- Monthly Earnings -->
                <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                        <h4 class="fw-semibold mb-3">Rs
                          <?php
                          $query2="select * from transactions";
                          $res2=mysqli_query($conn,$query2);
                          $temp=5000;
                          while($row=mysqli_fetch_assoc($res2)){
                            $temp=$temp+$row['price'];
                          }
                          echo $temp;
                          ?>                       
                        </h4>
                        <div class="d-flex align-items-center pb-1">
                          <span
                            class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-down-right text-danger"></i>
                          </span>
                          <p class="fs-3 mb-0">February 2024</p>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-currency-dollar fs-6"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="earning"></div>
                </div>
              </div>
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Yearly Earnings</h5>
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="fw-semibold mb-3">Rs.
                          <?php                           
                           echo $temp+70000;
                          ?>
                        </h4>
                        <div class="d-flex align-items-center mb-3">
                          <span
                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-up-left text-success"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">Current year</p>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="me-4">
                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">2024</span>
                          </div>
                          <div>
                            <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                            <span class="fs-2">2024</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-center">
                          <div id="breakup"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>                            
            </div>
          </div>
        </div>
        
           <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Applicant Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Date</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Course</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                          $query = "select * from transactions";
                          $result = mysqli_query($conn,$query);
                          if($result){
                            while($row = mysqli_fetch_array($result)){
                              echo "<tr><td>".$row['transaction_id']."</td>
                              <td>".$row['name_applicant']."</td>
                              <td>".$row['date']."</td>                              
                              <td>".$row['course_name']."</td></tr>";
                            }
                          }
                        
                        ?>                       
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
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