<?php include("student_navbar.php"); ?>
<style>
        body {
            background-image: url('img1.avif');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80%;
            width: 50%;
        }
        .login-form {
            background-color: yellowgreen;
            padding: 80px;
            border-radius: 150px;
            max-width: 400px;
        }
        .login-form input[type="text"] {
            width: 100%;
            padding: 20px;
            margin-bottom: 20px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
        }
    </style>

    <div class="login-container">
        <div class="login-form">
            <h2>View my result</h2>
            <form action="student_marksheet_after_view.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="roll_no">Roll No</label>
                    <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="Enter your roll no" required>
    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


<?php include("footer.php"); ?>
