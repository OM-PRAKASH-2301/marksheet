<?php 

session_start();

$hostname = "localhost";
$dbusername = "root";
$dbpassword = ""; //always blank for localhost
$dbname = "marksheet";

$con = mysqli_connect($hostname,$dbusername,$dbpassword, $dbname);
mysqli_select_db($con,$dbname);

if($con){
    //echo "successfully connect";
}else{
    echo "connection failed";
}

?>