<?php

    if (isset($_POST['submit'])) {
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];

        $fields = [
            'LastName' => "$lname", 
            'FirstName' => "$fname",
            'DateofBirth' => "$dob",
            'Gender' => "$gender"    
        ];
        $usersObj = new users();
        $result = $usersObj->insert($fields);
        echo "<script>alert('Data Resgistered Successfully')</script>";
        echo "<script>window.location='view.php'</script>";
        exit();
    }