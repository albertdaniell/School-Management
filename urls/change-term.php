<?php

require("../database/db.php");
$term=$_GET['term'];
$original_name=$_GET['original'];
// echo $original_name;

$update=mysqli_query($conn,"UPDATE `setting2` SET setting_text = '$term' WHERE setting_text='$original_name'");

if($update){
    echo "Current term has been updated!";
    echo "<script>window.open('admins.php','_self')</script>";

}


?>