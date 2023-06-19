<?php
session_start();
include_once __DIR__ . '/../php/dbc.php';
$username = $_SESSION['username'];


if (isset($_POST['curPass']) && isset($_POST['newPass']) && isset($_POST['conNewPass'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$curPass = validate($_POST['curPass']);
$newPass = validate($_POST['newPass']);
$conNewPass = validate($_POST['conNewPass']);

$curPass = md5($curPass);
$conNewPass = md5($conNewPass);

$checkCredSql = "SELECT * FROM sserv_user WHERE username = '$username' AND password = '$curPass'";
$result = mysqli_query($conn, $checkCredSql);

//CONTINUE FIX
if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $username && $row['password'] === $curPass){
        $updatePassSql = "UPDATE sserv_user SET password = '$conNewPass' WHERE username = '$username'";
        mysqli_query($conn, $updatePassSql);

        $_SESSION['password_changed'] = true;

        header("Location: /usp/dashboard.php");
        exit();
    }
}
//fix here
else{
    $_SESSION['password_changed'] = "Incorrect";

    header("Location: /usp/dashboard.php");
    exit();
}