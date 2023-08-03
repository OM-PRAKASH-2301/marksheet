<?php include("stdbinfo.php");

$roll_no = $_POST["roll_no"];

//echo $roll_no;  --- for checking input is showing or not

$selectQuery = "SELECT * FROM student_detail WHERE roll_no = '$roll_no'";

$result = mysqli_query($con, $selectQuery);

$rowcount = mysqli_num_rows($result);

if($rowcount > 0){
    $rowData = mysqli_fetch_assoc($result);
    //print_r($rowData);
}else{
    echo "no record found";
    die;
}

// Array ( [id] => 6 [name] => Om Prakash [father_name] => Gopal Ram [mother_name] => Savita bai [address] => Vill-mudpar post-uparwah [pin_code] => 491444 [school_name] => H S S GHUMKA [roll_no] => 74159 [gender] => male [date_of_birth] => 2023-07-22 00:00:00 [contact_no] => 2147483647 [email] => Omdewangan01@gmail.com [password] => 15987 [photo] => IMG-20220309-WA0018.jpg [created_date] => 2023-07-11 15:51:30 [updated_date] => 2023-07-11 15:51:30 )

$id = $rowData["id"];
$name = $rowData["name"];
$father_name = $rowData["father_name"];
$mother_name = $rowData["mother_name"];
$address = $rowData["address"];
$pin_code = $rowData["pin_code"];
$school_name = $rowData["school_name"];
$roll_no = $rowData["roll_no"];
$gender = $rowData["gender"];
$date_of_birth = $rowData["date_of_birth"];
$contact_no = $rowData["contact_no"];
$email = $rowData["email"];
$password = $rowData["password"];
$photo = $rowData["photo"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Marksheet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .marksheet-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .student-info {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-top: 20px;
        }
        .student-info .left-info {
            width: 60%;
        }
        .student-info .right-info {
            width: 40%;
            text-align: right;
        }
        .roll-no-box{
            margin-right: 50px;
        }
        .profile-pic {
            margin-top: 20px;
            text-align: center;
            margin-right: 80px;
        }
        .profile-pic img {
            width: 120px;
            height: 120px;
            margin-left: 280px;
            /* border-radius: 5%; */
        }
        .table-data{
            margin-left: 30px;
            margin-top: 20px;        
        }
        .marks-table {
            margin-top: 50px;
            margin-left: 10px;
            margin-right: 10px;
            text-align: center;
            font-size: small;
            
        }
        .marks-table th {
            text-align: center;
            vertical-align: middle;
            padding: 10px;
            text-align: center;
            font-size: small;
            
        }
        .total-marks {
            margin-top: 20px;
            text-align: right;
            font-weight: bold;
           
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="marksheet-header">
            <h2><?php echo $school_name;?></h2>
        </div>
        
        <div class="student-info">
            <div class="left-info">
                <table class="table-data">
                    
                    <tbody>
                        <tr>
                            <td> <strong>Name</strong>  </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $name;?></td>
                        </tr>
                        <tr>
                            <td> <strong>Father's Name</strong> </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $father_name;?></td>
                        </tr>
                        <tr>
                            <td> <strong>Mother's Name</strong> </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $mother_name;?></td>
                        </tr>
                        <tr>
                            <td> <strong>Address</strong> </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $address;?></td>
                        </tr>
                        <tr>
                            <td> <strong>Contact No</strong> </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $contact_no;?></td>
                        </tr>
                        <tr>
                            <td> <strong>School name</strong> </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $school_name;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="right-info">
                <div class="roll-no-box">
                    <p>Roll No: <?php echo $roll_no;?></p>
                </div>
                <div class="profile-pic">
                    <img src="upload_file/<?php echo $photo;?>" alt="Profile Picture">
                </div>
            </div>
        </div>

        <table class="table marks-table table table-bordered">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Maximum marks</th>
                    <th>Minimum marks</th>
                    <th>Obtain Marks</th>
                    <th>Maximum practical Marks</th>
                    <th>Minimum practical Marks</th>
                    <th>Obtain Marks</th>
                    <th>Maximum total Marks</th>
                    <th>Total marks obtain</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mathematics</td>
                    <td>100</td>
                    <td>33</td>
                    <td>55</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>100</td>
                    <td>55</td>
                </tr>
                <tr>
                    <td>English</td>
                    <td>100</td>
                    <td>33</td>
                    <td>60</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>100</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td>75</td>
                    <td>28</td>
                    <td>55</td>
                    <td>25</td>
                    <td>08</td>
                    <td>20</td>
                    <td>100</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Hindi</td>
                    <td>100</td>
                    <td>33</td>
                    <td>65</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>100</td>
                    <td>65</td>
                </tr>
                <tr>
                    <td>Sanskrit</td>
                    <td>100</td>
                    <td>33</td>
                    <td>70</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>100</td>
                    <td>70</td>
                </tr>
                <!-- Add more subjects and marks here -->
            </tbody>
        </table>

        <div class="total-marks">
            <p>Total Marks: 325 / 500</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
