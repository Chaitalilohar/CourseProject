<?php
$cat_id=$_GET['cat_id'];
include 'db.php';

$q="update categories set is_disabled=1 where cat_id=$cat_id";
$result=mysqli_query($conn,$q);
if($result){
    
    echo"<script>alert('Category deleted successfully!!!'); window.location='course.php';</script>";
}
else{
    echo "<script>alert('Category not deleted please, try again'); window.history.back();</script>";

}

?>