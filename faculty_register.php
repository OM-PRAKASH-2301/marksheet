<?php include("navbar.php"); ?>
    <style>
        body {
            background-image: url("fa.jpg");
            background-size: cover;
            background-position: center;
        }
        .registration-form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="registration-form">
        <div class="register-heading"><h2><u>Faculty Registration</u></h2></div><hr>
            <form action="faculty_insert.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Please enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Please enter your password" required>
                </div>
                <div class="form-group">
                    <label for="contact_no">Contact Number</label>
                    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Please enter your contact no" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <br><br>
    </div>

    

    <?php include("footer.php") ?>