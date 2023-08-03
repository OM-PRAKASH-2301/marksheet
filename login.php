<?php
include("stdbinfo.php");
// echo "<pre>";
// print_r($_POST);
    

$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];

if($role == 'student'){
    $selectQuery = "SELECT * FROM TABLENAME WHERE CONDITION1 AND CONDITION2 ....AND CONDITIONn";

    $selectQuery = "SELECT * FROM student_detail WHERE email = '$username' AND password = '$password'";

    $result = mysqli_query($con, $selectQuery);
    $rowCount =mysqli_num_rows($result);

    if($rowCount > 0){
        //echo "successfully login";
        $rowDta = mysqli_fetch_assoc($result);

        $_SESSION["email"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["role"] = $role;
        $_SESSION["student_id"] = $rowDta["id"];
        $_SESSION["student_name"] = $rowDta["name"];
        header("location:student_dashboard.php");
    }else{
        echo "login failed";
        header("location:index.php");
    }
}else{
    $selectQuery = "SELECT * FROM faculty WHERE email = '$username' AND password =  '$password'";
    $result = mysqli_query($con, $selectQuery);
    $rowcount = mysqli_num_rows($result);
    if($rowCount > 0){
        //echo "chhaya";
        header("location:faculty_dashboard.php");
    }else{
        echo "something went wrong";
        header("location:index.php");
    }
}


?>