<?php
include 'db.php';
extract($_POST);
$q="insert into Categories (cat_id,name,Price,is_disabled) values ('','$name','$price',0)";
$result=mysqli_query($conn,$q);
if($result){
    echo "<script>alert('category addded successfully'); window.location='categories.php'</script>";
}
?>