<?php include("stdbinfo.php");

$id = $_POST["id"];
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
// $file_name = $_POST["profile_image"];
$today = date("Y-m-d H:i:s");
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

echo $updateQuery = "UPDATE student_detail SET name = '$name',
                            father_name= '$father_name',
                            mother_name = '$mother_name',
                            address = '$address',
                            pin_code = '$pincode',
                            school_name = '$school_name',
                            roll_no = '$rollno',
                            gender = '$gender',
                            date_of_birth = '$dob',
                            contact_no = '$contact_no',
                            email = '$email',
                            password = '$password',
                            photo = '$file_name',
                            updated_date = '$today'
                WHERE id = '$id'";

$result = mysqli_query($con, $updateQuery);

if($result){
    echo "successfully updated";
    header("location:student_dashboard.php");
}else{
    echo "something went wrong";
}


?>