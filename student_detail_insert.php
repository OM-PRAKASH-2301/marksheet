<?php
include("stdbinfo.php");//including the info file for cheching database connected or not
include("navbar.php");
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
// echo "</pre>";
// $email = '';
// die;


if($_POST["name"] != ''){
    $name = $_POST["name"];
}else{
    echo "Please enter name";
    exit;
    die;
}

if($_POST["father_name"] != ''){
    $father_name = $_POST["father_name"];
}else{
    echo "Please enter father name";
    exit;
    die;
}
if($_POST["mother_name"] != ''){
    $mother_name = $_POST["mother_name"];
}else{
    echo "Please enter mother name";
    exit;
    die;
}
if($_POST["address"] != ''){
    $address = $_POST["address"];
}else{
    echo "Please enter address";
    exit;
    die;
}
if($_POST["pincode"] != ''){
    $pincode = $_POST["pincode"];
}else{
    echo "Please enter pincode";
    exit;
    die;
}
if($_POST["school_name"] != ''){
    $school_name = $_POST["school_name"];
}else{
    echo "Please enter school_name";
    exit;
    die;
}
if($_POST["rollno"] != ''){
    $rollno = $_POST["rollno"];
}else{
    echo "Please enter rollno";
    exit;
    die;
}
if($_POST["gender"] != ''){
    $gender = $_POST["gender"];
}else{
    echo "Please enter gender";
    exit;
    die;
}
if($_POST["dob"] != ''){
    $dob = $_POST["dob"];
}else{
    echo "Please enter dob";
    exit;
    die;
}
if($_POST["contact_no"] != ''){
    $contact_no = $_POST["contact_no"];
}else{
    echo "Please enter contact_no";
    exit;
    die;
}
if($_POST["email"] != ''){
    $email = $_POST["email"];
}else{
    echo "Please enter email";
    exit;
    die;
}
if($_POST["password"] != ''){
    $password = $_POST["password"];
}else{
    echo "Please enter password";
    exit;
    die;
}


$name = $_POST["name"];
$father_name = $_POST["father_name"];
$mother_name = $_POST["mother_name"];
$address = $_POST["address"];
$pincode = $_POST["pincode"];
$school_name = $_POST["school_name"];
$rollno = $_POST["rollno"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$contact_no = $_POST["contact_no"];
$email = $_POST["email"];
$password = $_POST["password"];

$file_name = $_FILES["profile_image"]["name"];
$tmp_name = $_FILES["profile_image"]["tmp_name"];

$directory_name = "upload_file";
if(!is_dir($directory_name)){
  mkdir($directory_name);
}

$targetfile = $directory_name."/".basename($file_name);
if(move_uploaded_file($tmp_name, $targetfile)){
  echo "file uploaded successfully";
}else{
  echo "something went wrong";
}


// inserting insert query for data inserted in database (phpmyadmin)
// $insertQuery = "INSERT INTO TABLENAME (COLUMN1,....COLUMNn)
//                         VALUES('VALUE1',....,'VALUEn)";

$insertQuery = "INSERT INTO student_detail (name, father_name, mother_name, address, pin_code, school_name,
                                                            roll_no, gender, date_of_birth, contact_no, email, password, photo)
                        VALUES('$name','$father_name','$mother_name','$address','$pincode','$school_name','$rollno',
                                                            '$gender','$dob','$contact_no','$email','$password','$file_name')";


$result = mysqli_query($con, $insertQuery);

if($result){
    echo "successfully inserted";
    //$id = mysqli_insert_id($con);
    // echo "last inserted id = ".$id;
    header("location:index.php");
}else{
    echo "something went wrong";
}




?>