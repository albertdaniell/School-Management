<?php

require("../database/db.php");

$term=$_POST['term'];
$year=$_POST['year'];
$term="$term $year";
$sclass=$_POST['sclass'];
$amount=$_POST['amount'];

if(empty($sclass) || empty($amount)){
    echo "Fields cannot be empty";
    exit();
}

$check_fee_structure=mysqli_query($conn, "SELECT *FROM `fee-structure` WHERE term='$term' AND sclass='$sclass'");
if(mysqli_num_rows($check_fee_structure)>0){
    echo "Error! Fee structure for $sclass, term $term already exists";
    exit();
}



$record=mysqli_query($conn, "INSERT INTO `fee-structure` VALUES('$term','$sclass','$amount',NOW())");
if($record){
    echo "Success, Fee structure for $sclass , term $term recorded";
}

else{
    echo "Error";
}

?>