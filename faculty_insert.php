<?php include("stdbinfo.php"); 
include("navbar.php");

// echo "<pre>";
// print_r($_POST);

if($_POST["email"] != ''){
    $email = $_POST["email"];
}else{
    echo "Please enter your email";
    exit;
    die;
}
if($_POST["password"] != ''){
    $password = $_POST["password"];
}else{
    echo "Please enter your password";
    exit;
    die;
}
if($_POST["contact_no"] != ''){
    $contact_no = $_POST["contact_no"];
}else{
    echo "Please enter your contact no";
    exit;
    die;
}

$email = $_POST["email"];
$password = $_POST["password"];
$contact_no = $_POST["contact_no"];

$insertQuery ="INSERT INTO TABLENAME (COLUMN1, COLUMN2,....COLUMNn)
            VALUES ('VALUE1', 'VALUE2', ....., 'VALUEn')";

$insertQuery = "INSERT INTO faculty (email, password, contact_no)
                    VALUES ('$email', '$password','$contact_no')";

$result = mysqli_query($con, $insertQuery);

if($result){
    //echo "successfully inserted";
    header("location:index.php");
}else{
    echo "something went wrong";
}



?>