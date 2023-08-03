
<?php include("navbar.php");  ?>
    <div class="banner"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 description">
                <h3>Description</h3>
                <p>Over the past three years, Digital Promise's Center for Inclusive Innovation has supported a cohort of local education agencies (LEA) in a series of design studios and coaching to enable teachers of color to design solutions to pressing pipeline and shortage challenges.</p>
                <p>A new report, “Recruitment and Retention: Pilot Solutions Designed by Teachers of Color,” shares exciting solutions that have been co-designed and developed by teachers of color in partnership with school district leaders, building leaders, higher education institutions, and partners.</p>
            </div>
            <div class="col-md-6 login-form">
            <div class="register-heading"><h2><u>Login</u></h2></div><br>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Select who you are</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role" id="student" value="student" checked>
                            <label class="form-check-label" for="student">Student</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role" id="faculty" value="faculty">
                            <label class="form-check-label" for="faculty">Faculty</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

<?php include("footer.php"); ?>