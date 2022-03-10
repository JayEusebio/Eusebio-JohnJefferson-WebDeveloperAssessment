<?php
    include 'model/model.class.php';
    include 'model/user.class.php';
    include 'controller/registration.controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="css/js/jquery-3.6.0.min.js"></script>
    <script src="css/js/app.js"></script>
    <link href="css/css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/css/styles.css" rel="stylesheet" />
    <link href="css/css/responsive.css" rel="stylesheet" />
    <title>Registration</title>
</head>
<body>
    <div class="container p-5">
        <div class="row p-2 bg-light border justify-content-center">
            <form method="POST">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Last name</label>
                    <div class="col-sm-10">
                    <input type="text" name="lname" class="form-control" id="inputEmail3" aria-label="Last name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                    <input type="text" name="fname" class="form-control" id="inputPassword3" aria-label="First Name" required>
                    </div>
                </div>
                <div class="row mb-3">
                <label for="DOB" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col">
                    <input type="date" name="dob" id="DOB" class="form-control" placeholder="Date of Birth" aria-label="Date of Birth" required>
                </div>
                <label for="gender" class="col-sm-1 col-form-label">Gender</label>
                <div class="col">
                    
                    <input type="text" name="gender" id="gender" class="form-control" placeholder="Gender" aria-label="Gender" required>
                </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>