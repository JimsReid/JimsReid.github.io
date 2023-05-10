<?php
session_start();
include_once "./php/dbc.php";

if (isset($_POST['username']) && isset($_POST['password'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if(empty($username)){
    header("Location: login.php?erro=Username is required.");
    exit();
}
else if(empty($password)){
    header("Location: login.php?erro=Username is required.");
    exit();
}

$sql = "SELECT * FROM sserv_user WHERE";