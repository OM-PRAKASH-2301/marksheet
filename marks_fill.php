<?php
include("stdbinfo.php");
// echo"<pre>";

$roll_no            = $_POST["roll_no"];
$subjectArray       = $_POST["subject"];
$max_numberArray    = $_POST["max_number"];
$min_num_array      = $_POST["min_number"];
$obtain_numberArray = $_POST["obtain_number"];


 //print_r($max_numberArray);
//  foreach ($variable as $key => $value) {
//     # code...
//  }


foreach ($subjectArray as $key => $subject) {
   $max_number = $max_numberArray[$key];
   $min_number = $min_num_array[$key];
   $obtain_number = $obtain_numberArray[$key];

   // SELECT `id`, `subject`, `max_number`, `min_number`, `obtain_number`, `created_date` FROM `mark_detail` WHERE 1
    $insertQuery =  "INSERT INTO mark_detail (subject, max_number, min_number, obtain_number, roll_no)
                        VALUES('$subject', '$max_number', '$min_number', '$obtain_number','$roll_no')";

    $result = mysqli_query($con, $insertQuery);

    if($result){
        //echo "inserted successfully";
        header("location:faculty_dashboard.php");
    }else{
        echo "something went wrong";
    }

}

?>