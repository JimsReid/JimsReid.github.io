<?php
    include_once __DIR__.'/../php/dbc.php';

    $ID = $_SESSION['ID'];
    $fName = $_SESSION['firstname'];
    $lname = $_SESSION['lastName'];

    $personalSql = "SELECT middlename, email, sex, birthdate FROM sserv_profile WHERE ID = '$ID'";
    $result = mysqli_query($conn, $personalSql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        $mName = $row['middlename'];
        $email = $row['email'];
        $sex = $row['sex'];
        $birthdate = date_format(date_create($row['birthdate']),"F j, Y"); 
    }
?>