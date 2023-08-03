<?php

include("stdbinfo.php");
// if(!isset($_SESSION['username'])){
//     echo "you are logged out";
//     header('lacation:index.php');
// }
$id = $_SESSION["student_id"];
$student_name = $_SESSION["student_name"];

?>


<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="index.php">
            <img src="logo1.jpg" width="40" height="40" class="d-inline-block align-top" alt="Logo">
            Welcome <?php echo $student_name?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="student_dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="student_view_result.php">View My Result</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="student_edit.php?id=<?php echo $id?>">Edit Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="student_password_change.php">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>


