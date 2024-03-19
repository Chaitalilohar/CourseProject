<?php
include 'db.php';
extract($_POST);
$q="insert into Categories (cat_id,name,is_disabled) values ('','$name',0)";
$result=mysqli_query($conn,$q);
if($result){
    echo "<script>alert('category addded successfully'); window.location='categories.php'</script>";
}
?>