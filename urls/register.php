<?php


require("../database/db.php");

   $sgender=$_POST['sgender'];
   $sname=$_POST['sname'];
   $sdob=$_POST['sdob'];
   $scertificate=$_POST['scertificate'];
   $sclass=$_POST['sclass'];
   $sdate=$_POST['sdate'];
   $pname=$_POST['pname'];
   $prelation=$_POST['prelation'];
   $pnumber=$_POST['pnumber'];
<<<<<<< HEAD
   $scurrentclass=$_POST['scurrentclass'];

  

   
   if(empty($sname) || empty($sgender) || empty($sclass) ||  empty($pname) || empty($prelation) || empty($pnumber)){
=======

   
   if(empty($sname) || empty($sgender) || empty($sdob) || empty($sclass) ||  empty($pname) || empty($prelation) || empty($pnumber)){
>>>>>>> 4849f855cb9b15285c0197e5566bbccb2baac8b8
       echo "Fields cannot be empty!";
       exit();
   }

   $check=mysqli_query($conn, "SELECT *FROM `student` WHERE birth_certificate = '$scertificate'");
   if(mysqli_num_rows($check)>0){
       echo "There exists another student with the same birth certificate number!";
       exit();


   }

<<<<<<< HEAD
   if(empty($sdate)){
    $sdate='NOW()';
    $register_sql=mysqli_query($conn,"INSERT INTO student VALUES(DEFAULT,'$sname','$sgender','$sdob','$scertificate','$sclass',$sdate,'$pname','$prelation','$pnumber','0',NOW(),'$scurrentclass')");

}


else{
 $register_sql=mysqli_query($conn,"INSERT INTO student VALUES(DEFAULT,'$sname','$sgender','$sdob','$scertificate','$sclass','$sdate','$pname','$prelation','$pnumber','0',NOW(),'$scurrentclass')");

}

=======

$register_sql=mysqli_query($conn,"INSERT INTO student VALUES(DEFAULT,'$sname','$sgender','$sdob','$scertificate','$sclass','$sdate','$pname','$prelation','$pnumber','0',NOW())");
>>>>>>> 4849f855cb9b15285c0197e5566bbccb2baac8b8
if($register_sql){

    echo "
    <script>
    var form=document.getElementById('register-student-form');
    form.reset();

    </script>
    ";
    echo "Registered $sname into database";
}
?>