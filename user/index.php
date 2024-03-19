<?php session_start();
include '../user/assets/server/server.php';
if (isset($_REQUEST['submit'])) {
  extract($_POST);
  $query = "select * from customer where cust_mob='$mobile_no' and cust_password='$password'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)==1) {
    $customer=mysqli_fetch_assoc($result);
    $_SESSION['customer']=$customer;
    echo "<script>alert('Login Successfully!!');</script>";
    header("location:/Chaitali Project/user/event/index.php");
  }else{
    echo "<script>alert('password or mob no is wrong,Please try again!!!');window.history.back();</script>";
  }
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <form action="" method="post">
                <div class="card-body">
                  <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                    <img src="./chat module/template_for_chat/assets/images/logos/dark-logo.svg" width="180" alt="">
                  </a>
                  <h1 class="text-center">Login</h1>
                  <form action="login-check.php" method="post">
                    <div class="mb-3">
                      <label for="mobile_no" class="form-label">Mobile No</label>
                      <input type="text" name="mobile_no" class="form-control">
                    </div>
                    <div class="mb-4">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <a class="text-primary fw-bold" href="#">Forgot Password ?</a>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                    <div class="d-flex align-items-center justify-content-center">
                      <a class="text-primary fw-bold ms-2" href="#">Create an account</a>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>