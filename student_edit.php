<?php
include("student_navbar.php"); 


$id = $_REQUEST["id"];
// $id = 5;
$selectQuery = "SELECT * FROM student_detail WHERE id = '$id'";

$result = mysqli_query($con, $selectQuery);
$id =mysqli_insert_id($con);
$rowCount = mysqli_num_rows($result);

$rowData = mysqli_fetch_assoc($result);


$id = $rowData["id"];
$name = $rowData["name"];
$father_name = $rowData["father_name"];
$mother_name = $rowData["mother_name"];
$address = $rowData["address"];
$pincode = $rowData["pin_code"];
$school_name = $rowData["school_name"];
$rollno = $rowData["roll_no"];
$gender = $rowData["gender"];
$dob = $rowData["date_of_birth"];
$contact_no = $rowData["contact_no"];
$email = $rowData["email"];
$password = $rowData["password"];
$file_name = $rowData["photo"];


?>

    <div class="container mt-3">
        <div class="register-heading"><h2><u>Student Registration</u></h2></div><hr>
        <form action="student_update.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="<?php echo $name; ?>" name="name" id="name" placeholder="Enter your name">
                </div>
            </div>
                <div class="form-group col-sm-4">
                    <label for="father_name">Father's Name</label>
                    <input type="text" class="form-control" value="<?php echo $father_name; ?>" id="father_name" name="father_name" placeholder="Enter your father's name here">
                </div>
                <div class="form-group col-sm-4">
                    <label for="mother_name">Mother's Name</label>
                    <input type="text" class="form-control" value="<?php echo $mother_name; ?>" id="mother_name" name="mother_name" placeholder="Enter your mother's name here">
                </div>
                <div class="form-group col-sm-4">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value="<?php echo $address; ?>" id="address" name="address" placeholder="Enter your address here" >
                </div>
                <div class="form-group col-sm-4">
                    <label for="pincode">Pin code</label>
                    <input type="number" class="form-control" value="<?php echo $pincode; ?>" id="pincode" name="pincode" placeholder="Enter your pincode here">
                </div>
                <div class="form-group col-sm-4">
                    <label for="school_name">School Name</label>
                    <input type="text" class="form-control" value="<?php echo $school_name; ?>" id="school_name" name="school_name" placeholder="Enter your school here">
                </div>
                <div class="form-group col-sm-4">
                    <label for="rollno">Roll Number</label>
                    <input type="number" class="form-control" value="<?php echo $rollno; ?>" id="rollno" name="rollno" placeholder="Enter your roll no here">
                </div>
                <div class="form-group col-sm-4">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" value="<?php echo $gender; ?>" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" value="<?php echo $dob; ?>" id="dob" name="dob">
                </div>
                <div class="form-group col-sm-4">
                    <label for="contact_no">Contact Number</label>
                    <input type="number" class="form-control" value="<?php echo $contact_no; ?>" id="contact_no" name="contact_no" placeholder="Enter your contact no here">
                </div>
                <div class="form-group col-sm-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="<?php echo $email; ?>" id="email" name="email" placeholder="Enter your email here">
                </div>
                <div class="form-group col-sm-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" value="<?php echo $password; ?>" id="password" name="password" placeholder="Enter your password here">
                </div>
            </div>
            <div class="form-group">
                <label for="profile_image">Profile Image</label>
                <input type="file" class="form-control-file" value="<?php echo $file_name; ?>" id="profile_image" name="profile_image">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <br>
            <br>
        </form>
    </div>
</body>



<script>
function validateForm(){
        let name = document.querySelector(`#name`)?.value;
        if(name ==""){
            alert("Please enter your name")
            return false;
        }else{
            let length1 = name.length;
            console.log(length1)
            if(length1>15){
                alert ('Name should not greater than 15')
                return false;
            }
        }
        let father_name = document.querySelector(`#father_name`)?.value;
        if(father_name ==""){
            alert("Please enter your father name")
            return false;
        }else{
            let length2 = father_name.length;
            console.log(length2)
            if(length2>15){
                alert ('Father name should not greater than 15')
                return false;
            }
        }
        let mother_name = document.querySelector(`#mother_name`)?.value;
        if(mother_name ==""){
            alert("Please enter your mother name")
            return false;
        }else{
            let length3 = mother_name.length;
            console.log(length3)
            if(length3>15){
                alert ('Mother name should not greater than 15')
                return false;
            }
        }
        let address = document.querySelector(`#address`)?.value;
        if(address ==""){
            alert("Please enter your address")
            return false;
        }else{
            let length4 = address.length;
            console.log(length4)
            if(length4>25){
                alert ('Address should not greater than 25')
                return false;
            }
        }
        let pincode = document.querySelector(`#pincode`)?.value;
        if(pincode ==""){
            alert("Please enter your pincode")
            return false;
        }else{
            let length5 = pincode.length;
            console.log(length5)
            if(length5>6){
                alert ('Pincode should not greater than 6')
                return false;
            }
        }
        let school_name = document.querySelector(`#school_name`)?.value;
        if(school_name ==""){
            alert("Please enter your school name")
            return false;
        }else{
            let length6 = school_name.length;
            console.log(length6)
            if(length6>25){
                alert ('school name should not greater than 25')
                return false;
            }
        }
        let rollno = document.querySelector(`#rollno`)?.value;
        if(rollno ==""){
            alert("Please enter your roll no")
            return false;
        }else{
            let length7 = rollno.length;
            console.log(length7)
            if(length7>10){
                alert ('roll no should not greater than 10')
                return false;
            }
        }
        let gender = document.querySelector(`#gender`)?.value;
        if(gender ==""){
            alert("Please select your gender")
            return false;
        }
        let dob = document.querySelector(`#dob`)?.value;
        if(dob ==""){
            alert("Please select your date of birth")
            return false;
        }
        let contact_no = document.querySelector(`#contact_no`)?.value;
        if(contact_no ==""){
            alert("Please enter your contact no")
            return false;
        }else{
            let length8 = contact_no.length;
            console.log(length8)
            if(length8>10){
                alert ('contact no should not greater than 10')
                return false;
            }
        }
        let email = document.querySelector(`#email`)?.value;
        if(email ==""){
            alert("Please select your email")
            return false;
        }
        let password = document.querySelector(`#password`)?.value;
        if(password ==""){
            alert("Please enter your password")
            return false;
        }else{
            let length9 = password.length;
            console.log(length9)
            if(length9>7){
                alert ('password should not greater than 7')
                return false;
            }
        }

}

function validateEmail(email) {
  // Regular expression for email validation
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  return emailRegex.test(email);
}

</script>

<?php include("footer.php"); ?>