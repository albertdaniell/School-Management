<?php
require("../urls/stats.php");
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


    <title>All student</title>
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
                            Administrator
                        </div>
                    </div>

                    <div id="side-nav-links">
                        <a href="index.php"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                        <a href="register_student.php"><i class="fa fa-user"></i> Register student</a>
                        <a href="all_students.php" class="active"><i class="fa fa-graduation-cap"></i>All student <span
                                class="badge">
                                <?php echo $students_nums?></span></a>
                        <a href="de_registered.php"><i class="fa fa-trash"></i> De-registered students <span class="badge">
                                <?php echo $de_registred_nums?></span></a>
                        <a href=""><i class="fa fa-exchange-alt"></i>Transfered students</a>
                        <a href="fee.php"><i class="fa fa-money-bill-alt"></i> Fee</a>
                        <a href="#"><i class="fa fa-bookmark"></i> Fee structure</a>
                        <a href="admins.php"><i class="fa fa-cogs"></i> Admin Setting</a>
                        <a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
                <div class="col-sm-10" id="main-div">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#"></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">
                                        <?php echo $email ?></a></li>
                                <li><a href="#">
                                        <?php echo $school?></a></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul>
                        </div>
                    </nav>

                    <div class="col-sm-12">
                    <h3><i class="fa fa-tag"></i> Fee structure </h3>
                        <hr>
                    <div class="col-sm-7">
                    <h4>Fee structure</h4>
<hr>

<?php

$check_fee_structure=mysqli_query($conn, "SELECT *FROM `fee-structure`");
if(mysqli_num_rows($check_fee_structure)>0){
    

    echo "
    
    <table class='table'>
    <thead>
    <tr>
    <th>Term</th>
    <th>Class</th>
    <th>Amount</th>


    </tr>
    
    
    </thead>
    <tbody>
    ";
    
}

while($row=mysqli_fetch_array($check_fee_structure)){
    $fsterm=$row[0];
    $fsclass=$row[1];
    $fsamount=$row[2];
    $fsdatemodified=$row[3];

    echo "
    
     <tr>
    <td>Term $fsterm</td>
    <td>$fsclass</td>
    <td>$fsamount</td>


    </tr>
    
    ";
}

echo "
</tbody>
</table>
";


?>
                    </div>
                    <div class="col-sm-5">

                    <div class="col-sm-12" id="sort-ctrl" style="margin:200px 0px;background:#009688;color:white">
                    <h4>Record a fee structure</h4>
                            <form action="" class="" id="add-to-feestructure-form">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label for="">Term:</label>
                                        <select name="term" id="term" class="form-control">
                                            <?php

if($the_current_term == 'Term 1'){
    echo '<option value="1"> '.$the_current_term.'</option>';
    echo '
    
    <option value="2">Term 2</option>
              <option value="3">Term 3</option>
    ';
    
    
    }
    else if($the_current_term == 'Term 2'){
        echo '<option value="2">'.$the_current_term.'</option>';

        echo '
    
        <option value="1">Term 1</option>
                
        ';
        
        
        echo '  <option value="3">Term 3</option>';
        
        
        }
    
        if($the_current_term == 'Term 3'){
            echo '<option value="3"> '.$the_current_term.'</option>';

            echo '
    
            <option value="1">Term 1</option>
                      <option value="2">Term 2</option>
            ';
         
            
            
            
            }
            else{
                echo 'Error';
            }

?>
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="">Year</label>
                                        <input id="year" name="year" type="text" value="<?php echo $year?>" class="form-control">
                                    </div>


                                    <div class="col-sm-12">
                                        <label for="">Class:</label>
                                        <select name="class" id="sclass" class="form-control">
                                            <option value="">---</option>
                                            <option value="Baby Class">Baby Class</option>
                                            <option value="Kg 1"> Kg 1</option>
                                            <option value="Kg 2">Kg 2</option>
                                            <option value="Kg 3">Kg 3</option>
                                            <option value="Class 1">Class 1</option>
                                            <option value="Class 2">Class 2</option>
                                            <option value="Class 3">Class 3</option>
                                            <option value="Class 4">Class 4</option>
                                            <option value="Class 5">Class 5</option>
                                            <option value="Class 6">Class 6</option>
                                            <option value="Class 7">Class 7</option>
                                            <option value="Class 8">Class 8</option>

                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="">Amount:</label>
                                        <input id="amount" name="amount" type="number" class="form-control">
                                    </div>
                                    <div class="col-sm-12">
                                        <label for=""></label><br><br>
                                        <button type="submit" id="record-fee-structure" class="btn btn-default">Enter</button>
<br><br>
                                    </div>
                                </div>
                            </form>
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
            all_students();
        }
    </script>


</body>

</html>



//

