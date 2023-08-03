<?php include("stdbinfo.php");
include("student_navbar.php");


echo "<pre>";
print_r($_POST);
// $id = $_REQUEST["id"];
// $current_pass = $_POST["current_pass"]
// $new_pass = $_POST["new_pass"]
// $confirm_new = $_POST["confirm_new"]

$selectQuery = "SELECT * FROM student_detail WHERE id = '$id'"; //$currentPasswordQuery

$result = mysqli_query($con, $selectQuery); //$currentPasswordResult

if(!$result){
        echo "not changed";
}else{
    $rowData = mysqli_fetch_assoc($result);
    

    //print_r($rowData) ; 

    //Array ( [id] => 10 [name] => Jai [father_name] => Gopal Ram [mother_name] => Savita bai [address] => mudpar [pin_code] => 491444 [school_name] => HSS UPARWAH [roll_no] => 1254 [gender] => male [date_of_birth] => 2022-10-06 00:00:00 [contact_no] => 2147483647 [email] => Omdewangan01@gmail.com  [photo] => 9e5c10e43d2cbe8555054609866e5449.jpg [created_date] => 2023-07-12 11:46:05 [updated_date] => 2023-07-12 11:46:05 )
    //[password] => 1254
    $current_pass = $rowData["password"];
}


if($_POST["current password"] === $current_pass){
    $current_pass = $_POST["password"];
    $new_pass = $_POST["new_pass"];
    $confirm_new = $_POST["confirm_new"];

    if($current_pass !== $password){
        echo "current password is incorrect";
    }else{
        $new_pass !== $confirm_new;
    }
}





?>

<style>
        body {
            background-image: url('img2.avif');
            background-size: cover;
            background-position: center;
            height: 80vh;
        }
        .change-password-container {
            display: flex;
            /* justify-content: center; */
            align-items: center;
            margin-left: 800px;
            height: 100%;
        }
        .change-password-form {
            background-color: white;
            padding: 40px;
            border-radius: 5px;
            max-width: 400px;
        }
        .change-password-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }
        .change-password-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
        }
</style>

    <div class="change-password-container">
        <div class="change-password-form">
            <h2>Change Password</h2><br>
            <form action="" method="post">
                <div class="form-group">
                    <input type="password" class="form-control" name ="current_pass" id ="current_pass" placeholder="Current Password" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name ="new_pass" id ="new_pass" placeholder="New Password" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name ="confirm_new" id ="confirm_new" placeholder="Confirm New Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Change Password</button>
            </form>
        </div>
    </div>


    <?php include("footer.php"); ?>