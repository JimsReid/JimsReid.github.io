<?php
    session_start();
    include_once __DIR__.'/../php/dbc.php';

    if(isset($_POST['firstName']) && isset($_POST['middleName']) && isset($_POST['lastName']) && isset($_POST['gender']))

    $ID = $_SESSION['ID'];
    $fName = $_POST['firstName'];
    $mName = $_POST['middleName'];
    $lName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $bday = $_POST['birthDate'];

    $updateSql = "UPDATE sserv_profile SET firstname = '$fName', middlename = '$mName', lastname = '$lName', sex = '$gender', birthdate = '$bday' WHERE ID = '$ID'";
    mysqli_query($conn, $updateSql);

    header("Location: /usp/dashboard.php");
    exit();
?>