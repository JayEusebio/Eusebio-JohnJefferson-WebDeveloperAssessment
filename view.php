<?php
    include 'model/model.class.php';
    include 'model/user.class.php';
    include 'controller/view.controller.php';
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
    <title>Success</title>
</head>
<body>
    <div class="container p-5">
        <div class="row p-2 bg-light border justify-content-center">
            <h1 class="mb-5 text-center">Hi <?php echo $dataValue['LastName']; ?></h1>
            <h2 class="mb-5 text-center"> Your Data </h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Gender</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $dataValue['LastName']; ?> </th>
                    <td><?php echo $dataValue['FirstName']; ?></td>
                    <td><?php echo $dataValue['DateofBirth']; ?></td>
                    <td><?php echo $dataValue['Gender']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>