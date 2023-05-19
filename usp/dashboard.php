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
            <div class="flex-shrink-0 dropdown">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="./profile-images/PFP-13164.jpg" alt="mdo" width="40" height="40" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" id="drop-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img src="./images/person-fill.svg"> Update Profile</a></li>
                    <li><a class="dropdown-item" id="drop-item" href="#"><img src="./images/key-fill.svg"> Change Password</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" id="drop-item" href="./php/logout.php"><img src="./images/box-arrow-right.svg" alt=""> Log Out</a></li>
                </ul>
            </div>
        </header>

        <!--UPDATE MODAL-->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Profile</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./php/profile-update_f.php" method="post" class="was-validated">
                            <h5 class="fw-bold">PERSONAL DATA</h5>
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <label for="firstName">First Name:</label>
                                    <input name="firstName" type="text" class="form-control" id="firstName" value="<?php echo $fName; ?>" required>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <label for="middleName">Middle Name:</label>
                                    <input name="middleName" type="text" class="form-control" id="middleName" value="<?php echo $mName; ?>" required>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <label for="lastName">Last Name:</label>
                                    <input name="lastName" type="text" class="form-control" id="lastName" value="<?php echo $lname; ?>"required>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <label for="nickName">Nickname:</label>
                                    <input name="nickName" type="text" class="form-control" id="nickName" value="---">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-3">
                                    <label for="gender">Gender:</label>
                                    <select name="gender" class="form-select" id="gender" required>
                                        <option selected></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <label for="birthDate">Birthdate:</label>
                                    <input name="birthDate" type="date" class="form-control" id="birthDate" required>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <label for="birthPlace">Birthplace:</label>
                                    <input name="birthPlace" type="text" class="form-control" id="birthPlace" value="---">
                                </div>
                                <div class="col-md-6 col-lg-3">
                                    <label for="citizenship">Citizenship:</label>
                                    <input name="citizenship" type="text" class="form-control" id="citizenship" value="---">
                                </div>
                            </div>                            
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <section class="user-page">
            <div class="container col-xxl-8 px-4 pt-5">
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
                        <p class="user-detail">---</p>
                        <p class="user-detail"><?php echo $sex; ?></p>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-label">Birthdate:</p>
                        <p class="user-label">Birthplace:</p>
                        <p class="user-label">Citizenship:</p>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-detail"><?php echo $birthdate; ?></p>
                        <p class="user-detail">---</p>
                        <p class="user-detail">---</p>
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
                        <p class="user-detail"><?php echo $studID; ?></p>
                        <p class="user-detail"><?php echo $program; ?></p>
                        <p class="user-detail">---</p>
                        <p class="user-detail">---</p>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-label">Entry Year:</p>
                        <p class="user-label">Year Level:</p>
                        <p class="user-label">Status</p>
                    </div>
                    <div class="col-md-6 col-6 col-lg-3">
                        <p class="user-detail"><?php echo $dateStart; ?></p>
                        <p class="user-detail"><?php echo $yrLevel; ?></p>
                        <p class="user-detail"><?php echo $studStat; ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="stud-support">
            <div class="container col-xxl-8 px-4 pb-5">
                <h1 class="display-5 fw-bold lh-1 mb-5 mt-5">Student Support Services</h1>
            </div>
        </section>

        <section class="sss-features">
            <div class="container col-xxl-8 px-4 py-5">
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="col-md-4 col-sm-8 col-lg-4" id="sss-items">
                        <a href="#" class="sss-a">
                            <div class="sss-img">
                                <img src="./images/calculator.svg" class="img-svg">
                            </div>
                            <h3 class="fs-2">GWA Calculator</h3>
                            <p>Want to keep track of your academic standing? This GWA calculator will help you give an idea of how well you're doing so far.</p>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-8 col-lg-4" id="sss-items">
                        <a href="#" class="sss-a">
                            <div class="sss-img">
                                <img src="./images/list-check.svg" class="img-svg">
                            </div>
                            <h3 class="fs-2">Curriculum Checklist</h3>
                            <p>Want to see how near you are to graduation? View your curriculum now.</p>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-8 col-lg-4" id="sss-items">
                        <a href="#" class="sss-a">
                            <div class="sss-img">
                                <img src="./images/calendar-check.svg" class="img-svg">
                            </div>
                            <h3 class="fs-2">Academic Calendar</h3>
                            <p>Check out the academic calendar to help you plan ahead.</p>
                        </a>
                    </div>
                </div>
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

<?php
} else {
    header("Location: /usp/dashboard.php");
    exit();
}
?>