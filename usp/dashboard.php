<?php
session_start();
include("./php/dashboard_f.php");

if (isset($_SESSION['ID'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>USP | Dashboard</title>
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
            <a href="#"><img class="logo" src="./images/uap-logo.png"></a>
            <ul class="navlist">
                <li><a href="#">Directory</a></li>
                <li><a href="./index.php">Home</a></li>
            </ul>

            <div class="bx bx-menu" id="menu-icon">

            </div>
        </header>

        <section class="user-page">
            <div class="container col-xxl-8 px-4 py-5">
                <h1 class="display-5 fw-bold lh-1 mb-5 mt-5">Hello, <?php echo $fName; ?>!</h1>
                <div class="row g-4 pb-2 px-2 row-cols-1 row-cols-lg-3" id="personal-data">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4 class="display-8">PERSONAL DATA</h4>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-label">Last Name:</p>
                        <p class="user-label">First Name:</p>
                        <p class="user-label">Middle Name:</p>
                        <p class="user-label">Nickname:</p>
                        <p class="user-label">Gender:</p>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-detail"><?php echo $lname; ?></p>
                        <p class="user-detail"><?php echo $fName; ?></p>
                        <p class="user-detail"><?php echo $mName; ?></p>
                        <p class="user-detail">Detail</p>
                        <p class="user-detail"><?php echo $sex; ?></p>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-label">Birthdate:</p>
                        <p class="user-label">Birthplace:</p>
                        <p class="user-label">Citizenship:</p>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-detail"><?php echo $birthdate; ?></p>
                        <p class="user-detail">Detail</p>
                        <p class="user-detail">Detail</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4 class="display-8">ACADEMIC STATUS</h4>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-label">Student Number:</p>
                        <p class="user-label">Program:</p>
                        <p class="user-label">Specialization:</p>
                        <p class="user-label">Type:</p>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-detail">Detail</p>
                        <p class="user-detail">Detail</p>
                        <p class="user-detail">Detail</p>
                        <p class="user-detail">Detail</p>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-label">Entry Year:</p>
                        <p class="user-label">Year Level:</p>
                        <p class="user-label">Status</p>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-detail">Detail</p>
                        <p class="user-detail">Detail</p>
                        <p class="user-detail">Detail</p>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./js/script.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: /usp/dashboard.php");
    exit();
}
?>