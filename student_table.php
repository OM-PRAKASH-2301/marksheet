<?php 
include("stdbinfo.php");
include("navbar.php");

$selectQuery = "SELECT * FROM student_datail";

$result = mysqli_query($con, $selectQuery);
// $numrow = mysqli_num_rows($result);

//echo "number of row =".$numrow;

?>


<table class="container table table-bordered mt-5">
    <thead>
        <tr>
            <th>$id</th>
            <th>Name</th>
            <th>Father name</th>
            <th>Mother name</th>
            <th>Address</th>
            <th>Pin code</th>
            <th>School name</th>
            <th>Roll no</th>
            <th>Gender</th>
            <th>Date of birth</th>
            <th>Contact no</th>
            <th>Email</th>
            <th>Password</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row =mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $name = $row["name"];
            $father_name = $row["father_name"];
            $mother_name = $row["mother_name"];
            $address = $row["address"];
            $pincode = $row["pincode"];
            $school_name = $row["school_name"];
            $rollno = $row["rollno"];
            $gender = $row["gender"];
            $dob = $row["dob"];
            $contact_no = $row["contact_no"];
            $email = $row["email"];
            $password = $row["password"];
            ?>
           <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $father_name; ?></td>
            <td><?php echo $mother_name; ?></td>
            <td><?php echo $address; ?></td>
            <td><?php echo $pincode; ?></td>
            <td><?php echo $pincode; ?></td>
            <td><?php echo $school_name; ?></td>
            <td><?php echo $rollno; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $dob; ?></td>
            <td><?php echo $contact_no; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo $created_date; ?></td>
            <td><?php echo $updated_date; ?></td>
           </tr>
           <?php } ?>
    </tbody>
</table>