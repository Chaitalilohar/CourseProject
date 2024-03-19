<?php 
include '../assets/server/server.php';
extract($_POST);
$query= "insert into transactions (name_applicant,course_name,price) values ('$cust_name','$course_name','$price')";
$result=mysqli_query($conn,$query);
if($result){
    echo "<script>alert('Payment Successfull!!');window.location='index.php';</script>";
}
else{
    echo mysqli_error($conn);
}
?>