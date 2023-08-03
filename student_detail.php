

<style>
    .profile-container{
        display: flex;
        align-items: flex-start;
    }
    .profile-image {
        max-width: 200px;
        margin-right: 20px;
    }
</style>

<div class="container"> 
    <div style="margin-top: 5px;"><h2>Profile Detail</h2></div>
    <hr>
    <div class="profile-container">
      <img src="<?php echo $directory_name.'/'.$file_name; ?>" alt="Profile Image" class="profile-image">
      <div>
      <table style="width: 400px; margin-bottom: 20px;">
        <thead>
            <tr>
                <th>Description</th>
                <th> &nbsp;  &nbsp;Detail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name</td>
                <td>: &nbsp; <?php echo $name;?></td>
            </tr>
            <tr>
                <td>Father name</td>
                <td>: &nbsp; <?php echo $father_name;?></td> 
            <tr>           
                <td>Mother name</td>
                <td>: &nbsp; <?php echo $mother_name;?></td>
            </tr>
            <tr>           
                <td>Address</td>
                <td>: &nbsp; <?php echo $address;?></td>
            </tr>
            <tr>           
                <td>Pincode</td>
                <td>: &nbsp; <?php echo $pincode;?></td>
            </tr>
            <tr>
                <td>School name</td>
                <td>: &nbsp; <?php echo $school_name;?></td>
            </tr>
            <tr>
                <td>Roll no</td>
                <td>: &nbsp; <?php echo $rollno;?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>: &nbsp; <?php echo $gender;?></td>
            </tr>
            <tr>
                <td>Date of birth</td>
                <td>: &nbsp; <?php echo $dob;?></td>
            </tr>
            <tr>
                <td>Contact no</td>
                <td>: &nbsp; <?php echo $contact_no;?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: &nbsp; <?php echo $email;?></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: &nbsp; <?php echo $password;?></td>
            </tr>
        </tbody>
    </table>
    </div>
    </div>
</div>

<?php include("footer.php"); ?>