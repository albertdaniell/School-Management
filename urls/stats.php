<?php



require("../database/db.php");

<<<<<<< HEAD


=======
>>>>>>> 4849f855cb9b15285c0197e5566bbccb2baac8b8
$students_query=mysqli_query($conn,"SELECT *FROM `student` WHERE delete_status = '0'");
$students_nums=mysqli_num_rows($students_query);

$students_nums=number_format($students_nums);


$de_registred_query=mysqli_query($conn,"SELECT *FROM `student` WHERE delete_status = '1'");
$de_registred_nums=mysqli_num_rows($de_registred_query);
$de_registred_nums=number_format($de_registred_nums);

$male_students_query=mysqli_query($conn,"SELECT *FROM `student` WHERE delete_status = '0' AND gender= 'Male'");
$male_students_nums=mysqli_num_rows($male_students_query);
$male_students_nums=number_format($male_students_nums);


$female_students_query=mysqli_query($conn,"SELECT *FROM `student` WHERE delete_status = '0' AND gender= 'Female'");
$female_students_nums=mysqli_num_rows($female_students_query);
$female_students_nums=number_format($female_students_nums);


$school_name=mysqli_query($conn,"SELECT *FROM `setting` WHERE title='School name'");
while($row=mysqli_fetch_array($school_name)){
    $school=$row[1];

}

<<<<<<< HEAD
$current_term=mysqli_query($conn,"SELECT *FROM `setting2` WHERE title='Term'");
while($row=mysqli_fetch_array($current_term)){
    $the_current_term=$row[1];

}

$year=date("Y");
=======

>>>>>>> 4849f855cb9b15285c0197e5566bbccb2baac8b8

?>