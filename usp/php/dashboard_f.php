<?php
    include_once __DIR__.'/../php/dbc.php';

    $ID = $_SESSION['ID'];
    $fName = $_SESSION['firstname'];
    $lname = $_SESSION['lastName'];

    $personalSql = "SELECT middlename, email, sex, birthdate FROM sserv_profile WHERE ID = '$ID'";
    $pResult = mysqli_query($conn, $personalSql);

    if(mysqli_num_rows($pResult) === 1){
        $pRow = mysqli_fetch_assoc($pResult);
        $mName = $pRow['middlename'];
        $email = $pRow['email'];
        $sex = $pRow['sex'];
        $birthdate = date_format(date_create($pRow['birthdate']),"F j, Y"); 
    }

    $academicSql = "SELECT studID, g3, datestart, yearlevel, studentstatus FROM sserv_course WHERE profileID = '$ID'";
    $aResult = mysqli_query($conn, $academicSql);

    if(mysqli_num_rows($aResult) === 1){
        $aRow = mysqli_fetch_assoc($aResult);
        $studID = $aRow['studID'];
        $program = $aRow['g3'];
        $dateStart = date_format(date_create($aRow['datestart']),"Y");
        $yrLevel = $aRow['yearlevel'];
        $studStat = ucfirst($aRow['studentstatus']);
    }
?>