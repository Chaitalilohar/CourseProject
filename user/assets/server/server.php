<?php  
    $server = "localhost";
    $suser = "root";
    $spass = "";
    $dn = "coursedb";
    $conn = mysqli_connect($server,$suser,$spass,$dn); 
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
?>