<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USP | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@300;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@300&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <header>
        <a href="./index.php"><img class="logo" src="./images/uap-logo.png"></a>
        <ul class="navlist">
            <li><a href="./index.php">Home</a></li>
        </ul>

        <div class="bx bx-menu" id="menu-icon">

        </div>
    </header>

    <section class="login" id="login">
        <div class="col-lg-12 form-div">
            <h2>Hi, Dragon!</h2>
            <form action="./php/login_f.php" method="POST">
                <div class="form-group">
                    <input name="username" class="form-control-lg" type="text" placeholder="Username">
                    <input name="password" class="form-control-lg" type="password" placeholder="Password">
                </div>
                <?php
                    if(isset($_GET['error'])){
                        ?> <p class="error" id="error-msg"> <?php echo $_GET['error'];?> </p>
                    <?php }
                ?>
                <p><a href="#">Forgot password?</a></p>
                <p><a href="#">No account yet?</a></p>
                <button type="submit" class="btn btn-dark">Log-In</button>
            </form>
        </div>
    </section>

    <footer>
        <p>Address</p>
        <p><strong>Pearl Drive, Ortigas Center, Pasig City 1605, Philippines</strong></p>
        <br>
        <p>Contact</p>
        <p><strong>Phone: (632) 8637-0912 to 26</strong></p>
        <p><strong>E-mail: info@uap.asia</strong></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>