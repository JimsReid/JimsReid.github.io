<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USP | Home</title>
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
            <li><a href="#" class="active">Home</a></li>
        </ul>

        <div class="bx bx-menu" id="menu-icon">

        </div>
    </header>

    <section class="home">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-3">
                </div>
                <div class="col-lg-9">
                    <h1 class="display-1 fw-bold" id="home-text">Dragon's Lair</h1>
                    <p class="lead" id="home-desc"><em>The online portal where UA&P dragons can access the different student support services within the University</em></p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="./login.php" class="btn btn-dark btn-lg px-4 me-md-2">Student Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mid">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col-md-6 col-sm-8 col-lg-6" id="mid-items">
                    <a href="#" class="mid-a">
                        <div class="mid-img">
                            <img src="./images/calendar-check.svg" class="mid-img-svg">
                        </div>
                        <p>Be updated with what's currently happening in UA&P by accessing our <span class="mid-txt-span">academic calendar</span>.</p>
                    </a>
                </div>
                <div class="col-md-6 col-sm-8 col-lg-6" id="mid-items">
                    <a href="#" class="mid-a">
                        <div class="mid-img">
                            <div class="mid-img">
                                <img src="./images/question-circle-fill.svg" class="mid-img-svg">
                            </div>
                        </div>
                        <p><span class="mid-txt-span">Confirmation</span> requirements? <span class="mid-txt-span">Enrollment</span> procedures? We've got them all for you, baby dragons!</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="announcement-section">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <h1 class="display-2 fw-bold lh-1 mb-3" id="announcement-title">Important Announcements</h1>
                    <p class="announcement-desc"><span class="mid-txt-span">UA&P Guidelines for on-campus classes and activities</span>
                        <br>Everyone is encouraged to read the documents below prepared to assist students in the gradual resumption of face-to-face classes and in-person activities.
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-dark btn-lg px-4 me-md-2">View All</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="./images/announcement-image.png" class="d-block mx-lg-auto img-fluid" alt="announcement-img" width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="units">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <h1 class="display-2 fw-bold lh-1 mb-3">Get to know us!</h1>
            </div>
            <div class="container text-center my-3">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/CB997E/333333?text=1" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 1</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/DDBEA9/333333?text=2" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 2</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/FFE8D6/333333?text=3" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/B7B7A4/333333?text=4" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 4</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/A5A58D/333333?text=5" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 5</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://via.placeholder.com/700x500.png/6B705C/eeeeee?text=6" class="img-fluid">
                                        </div>
                                        <div class="card-img-overlay">Slide 6</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev" id="prev-slide">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next" id="next-slide">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
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