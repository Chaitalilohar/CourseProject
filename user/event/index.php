<?php   session_start();
  if(!isset($_SESSION['customer'])){
    header("location:login.php");
  }
  $customer_name=$_SESSION['customer']['cust_name']; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/css/adminlte.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body class="hold-transition layout-top-nav h-100" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.9)),url('../assets/background/event_background.webp');
    background-repeat:no-repeat; background-attachment:fixed; background-size:cover; background-position:center">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-dark navbar-black">
            <div class="container">

                <a href="/" class="navbar-brand">
                    <span class="brand-text font-weight-light"><b>Courses</b></span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!-- /.navbar -->
        <!-- main -->
        <div class="container">
            <h1 class="masthead-brand text-center text-light p-3">Events</h1>
            <div class="row">
                <div class="d-flex flex-row">
                    <form action="../Payments/razorpay-php/Razorpay.php" method="post">
                        <input type="hidden" name="cust_name" value=<?php echo $customer_name;?>>
                        <div class="card ml-5" style="width: 20rem;">
                            <img class="card-img-top" src="../assets/media/image/img1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5  class="card-title">Full Stack Web Development</h5>
                                <p class="card-text"></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Duration : 3 months</li>
                            </ul>
                            <div class="card-body">
                                <b class="card-link">Price Rs.2000/-</b>
                                <input type="hidden" name='course_name' value="Full Stack Web Development">
                                <input type="hidden" name="amount" value="2000">
                                <button class="card-link">Pay</button>
                            </div>
                        </div>
                    </form>
                    <form action="../Payments/razorpay-php/Razorpay.php" method="post">
                    <div class="card ml-5" style="width: 20rem;">
                    <input type="hidden" name="cust_name" value=<?php echo $customer_name;?>>
                        <img class="card-img-top" src="../assets/media/image/img2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Python</h5>
                            <p class="card-text"></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Duration : 2 months</li>
                        </ul>
                        <div class="card-body">
                            <b class="card-link">Price Rs.3000/-</b>
                            <input type="hidden" name='course_name' value="Python">
                            <input type="hidden" name="amount" value="3000">
                            <button class="card-link">Pay</button>
                        </div>
                    </div>
                    </form>
                    <form action="../Payments/razorpay-php/Razorpay.php" method="post">
                    <div class="card ml-5" style="width: 20rem;">
                    <input type="hidden" name="cust_name" value=<?php echo $customer_name;?>>
                        <img class="card-img-top" src="../assets/media/image/img3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">A.I.</h5>
                            <p class="card-text"></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Duration : 3 months</li>
                        </ul>
                        <div class="card-body">
                            <b class="card-link">Price Rs.4000/-</b>
                            <input type="hidden" name='course_name' value="A.I.">
                            <input type="hidden" name="amount" value="4000">
                            <button class="card-link">Pay</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.main -->

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="../plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap 4 -->
        <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- AdminLTE App -->
        <script src="../assets/js/adminlte.min.js"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="../assets/js/demo.js"></script>
</body>

</html>