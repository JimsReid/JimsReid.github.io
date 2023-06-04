<?php
session_start();
include_once __DIR__.'/../php/dbc.php';

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

if(empty($username) && empty($password)){
    header("Location: /usp/login.php?error=Fields are required");
    exit();
}
else if(empty($username)){
    header("Location: /usp/login.php?error=Username is required");
    exit();
}
else if(empty($password)){
    header("Location: /usp/login.php?error=Password is required");
    exit();
}

$password = md5($password);

$loginSql = "SELECT * FROM sserv_user WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $loginSql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $username && $row['password'] === $password){
        echo "Logged In!";
        
        $afterSuccesfulLogin = "SELECT * FROM sserv_profile WHERE email = '$username'";
        $loginResult = mysqli_query($conn, $afterSuccesfulLogin);

        $loginRow = mysqli_fetch_assoc($loginResult);
        $_SESSION['username'] = $username;
        $_SESSION['ID'] = $loginRow['ID'];
        $_SESSION['firstname'] = $loginRow['firstname'];
        $_SESSION['lastName']= $loginRow['lastname'];

        header("Location: /usp/dashboard.php");
        exit();
    }

    else{
        header("Location: /usp/login.php?error=Incorrect username or password");
        exit();
    }
}
else{
    header("Location: /usp/login.php?error=Incorrect username or password");
    exit();
}