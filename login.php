<?php session_start();
include 'db.php';

if(isset($_POST['submit'])){
extract($_POST);
$q="select * from admin where mobile_no='$mobile_no' and password='$password'";
$result =mysqli_query($conn,$q);
if(mysqli_num_rows($result)==1){
    $user_data=mysqli_fetch_assoc($result);
    $_SESSION['user']=$user_data;
    header('location:index.php');
}
else {
    $msg="Password or mobile no is wrong, please try again!!!";
}
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Courses</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <h2 class="text-center"> Login</h2>
                <?php
                if(isset($msg)){
                    echo "<p class='text-center text-danger alert alert-danger'>$msg</p>";
                  unset($msg);
                  }
                ?>
                <form action="" method="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mobile No:</label>
                    <input type="text" name="mobile_no" class="form-control" >
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password"  class="form-control">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                   
                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to Courses?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>