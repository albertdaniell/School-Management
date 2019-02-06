<?php

session_start();//here we start a session
$email=$_SESSION["email"];

error_reporting(0);


if(!isset($email)){
    echo "<script>window.open('../index.php','_self')</script>";
}

?>

<html lang="en">

<head>

    <?php
require("../headers.php");


?>
    <link rel="stylesheet" href="../css/style.css">


    <title>View student</title>
</head>

<body onload="all_students()">

    <div class="col-sm-12" id="dialog">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" id="dialog-content">



        </div>
        <div class="col-sm-3"></div>
    </div>

    <div id="pop-up">
        <span id="pop-up-txt">

        </span>
        <button class="btn btn-default" onclick="hideMsg()">OK</button>
    </div>
    <div class="container-fluid">

        <div class="row" style="padding:0">
            <div class="col-md-12" style="padding:0">
            <div class="col-sm-2" id="sidenav">
                    <div id="head">
                        <div class="col-sm-2">
                            <i class="fa fa-briefcase fa-2x" style="color:#ccc"></i>
                        </div>
                        <div class="col-sm-10">
                            logged in as
                            <?php echo $email ?>
                        </div>
                    </div>

                    <div id="side-nav-links">
                        <a href="../public/index.php"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                        <a href="../public/register_student.php"><i class="fa fa-user"></i> Register student</a>
                        <a href="../public/all_students.php" class="active"><i class="fa fa-graduation-cap"></i>All student</a>
                        <a href="../public/de_registered.php"><i class="fa fa-trash"></i> De-registered students</a>
                        <a href=""><i class="fa fa-exchange-alt"></i>Transfered students</a>
                        <a href="admins.php"><i class="fa fa-cogs"></i> Admin Setting</a>
                        <a href="../public/logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
                <div class="col-sm-10" id="main-div">

                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#"></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Page 1</a></li>
                                <li><a href="#">Page 2</a></li>
                                <li><a href="#">Page 3</a></li>
                            </ul>
                        </div>
                    </nav>

                    <div class="col-sm-12">

                     
                      

<<<<<<< HEAD
                        <div >
=======
                        <div id="">
>>>>>>> 4849f855cb9b15285c0197e5566bbccb2baac8b8

                        <?php

                        require("../database/db.php");

                        $sid=$_GET['sreg'];
  
$fetch=mysqli_query($conn, "SELECT *FROM `student` where id='$sid'");

if(mysqli_num_rows($fetch)>0){


    
}

else{
    echo "
    <div class='alert'>
    <strong>No students found!</strong>
    </div>
    
    ";
}

while ($row = mysqli_fetch_array($fetch)) {
    $sreg=$row[0];
    $sname=$row[1];
    $sgender=$row[2];
    $sdob=$row[3];
    $scertificate=$row[4];
    $sclass=$row[5];
    $sdate=$row[6];
    $pname=$row[7];
    $prelation=$row[8];
    $pnumber=$row[9];
<<<<<<< HEAD
    $current_class=$row[12];
=======
>>>>>>> 4849f855cb9b15285c0197e5566bbccb2baac8b8

 


    
}



?>
<<<<<<< HEAD
                            <h3><?php echo "$sname - $sclass"?></h3>
                            <hr>
                                             <button type='button' class='btn btn-danger' id='delete' sid='<?php echo $sreg ?>'><i class='fa fa-trash'></i></button>

                            <div class="col-sm-12" style="margin:20px 0px;" id="personal-details">
=======
                            <h3><?php echo $sname?></h3>
                            <hr>
                                             <button type='button' class='btn btn-danger' id='delete' sid='<?php echo $sreg ?>'><i class='fa fa-trash'></i></button>

                            <div class="col-sm-12" style="margin:20px 0px;">
>>>>>>> 4849f855cb9b15285c0197e5566bbccb2baac8b8

                            <div class="col-sm-6">
                                <h4>Personal Details</h4>
                                <hr>

                                <strong>Registration number</strong>: <?php echo $sreg?><br>
                                <strong>Gender</strong>: <?php echo $sgender?> <br>
                                <strong>DOB </strong>: <?php echo $sdob?> <br>
                                <strong>Certificate number</strong>: <?php echo $scertificate?> <br>
                                <strong>Class admitted to</strong>: <?php echo $sclass?>




                                </b>

                            </div>
                            <div class="col-sm-6">
                                <h4>Parents Details</h4>
                                <hr> 
                                <strong>Parent/Guardian Name</strong>: <?php echo $pname?><br>
                                <strong>Relationship</strong>: <?php echo $prelation?> <br>
                                <strong>Phone</strong>: <?php echo $pnumber?>


                            </div>
<<<<<<< HEAD

                            
                            </div>
                            <div class="col-md-12" id="student-fees">
                                <h4>Payment of fees</h4>
                                <hr>

                                <?php
$fetch_fee=mysqli_query($conn,"SELECT *FROM fees INNER JOIN student ON fees.student_reg = student.id WHERE id='$sreg' ORDER BY fees.date_updated DESC LIMIT 0,10");


if(mysqli_num_rows($fetch_fee)){

echo '
<table class="table table-condensed table-hover" style="background:#f7f7f7;">
<thead>
    <tr>
        
        <th>Class</th>
        <th>Term</th>
        <th>Amount paid</th>
        <th>Receipt number</th>
        <th>date</th>

    </tr>
</thead>
<tbody>

';

while($row=mysqli_fetch_array($fetch_fee)){
    $receipt_no =$row['receipt_no'];
    $sreg=$row['student_reg'];
    $class=$row['current_class'];
    $term=$row['term'];
    $fee=$row['fee_amount'];
    $datepaid=$row['date_updated'];
    $student_name=$row['fullname'];

    $fee=number_format($fee);

    echo "
    
    <tr>
    
    <td>$class</td>
    <td>$term</td>
    <td>$fee</td>
    <td>$receipt_no</td>
    <td>$datepaid</td>
</tr>
    ";
}

}
else{
    echo "No fee payments available!";
}





?>
=======
>>>>>>> 4849f855cb9b15285c0197e5566bbccb2baac8b8
                            </div>


                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../javascript/jquery2.1.min.js"></script>
    <script src="../javascript/main.js"></script>
    <script>
        function start() {
           
        }
    </script>


</body>

</html>