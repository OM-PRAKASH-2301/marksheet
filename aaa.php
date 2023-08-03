<!DOCTYPE html>
<html>
<head>
    <title>Faculty Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('img3.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .registration-form {
            background-color: lightgrey;
            padding: 30px;
            border-radius: 5px;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 20px;
        }
        .registration-form input[type="email"],
        .registration-form input[type="password"],
        .registration-form input[type="text"],
        .registration-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }
        .registration-form button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="registration-form">
            <h2>Faculty Registration</h2>
            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="contact_no">Contact No</label>
                    <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Contact No" required>
                </div>
                <div class="form-group">
                    <label for="education">Education</label>
                    <select class="form-control" required>
                        <option value="">Select Department</option>
                        <option value="dept1">Department 1</option>
                        <option value="dept2">Department 2</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
