<?php


require("../database/db.php");

   $sid=$_POST['sid'];
   $sgender=$_POST['sgender'];
   $sname=$_POST['sname'];
   $sdob=$_POST['sdob'];
   $scertificate=$_POST['scertificate'];
   $sclass=$_POST['sclass'];
   $sdate=$_POST['sdate'];
   $pname=$_POST['pname'];
   $prelation=$_POST['prelation'];
   $pnumber=$_POST['pnumber'];

   
   if(empty($sname) || empty($sgender) || empty($sdob) || empty($sclass) ||  empty($pname) || empty($prelation) || empty($pnumber)){
       echo "Fields cannot be empty!";
       exit();
   }


$update_sql=mysqli_query($conn,"UPDATE `student` SET fullname ='$sname' ,gender ='$sgender' ,dob='$sdob' ,birth_certificate = '$scertificate' , class= '$sclass', date_admitted= '$sdate', parent_name = '$pname' , parent_relationship = '$prelation', phone ='$pnumber', date_updated = NOW() WHERE id = '$sid'");
if($update_sql){

    echo "
    <script>
    var form=document.getElementById('register-student-form');
    form.reset();

    </script>
    ";
    echo "Update successful for student $sname";
}

else {
    echo "Error in update script" . mysqli_error($conn);

}


// AND gender ='$sgender' AND dob='$sdob' AND birth_certificate = '$scertificate' AND class= '$sclass' AND date_admitted= '$sdate' AND parent_name = '$pname' AND parent_relationship = '$prelation' AND phone ='$pnumber' AND date_updated = NOW() WHERE id = '$sid' 
?>





