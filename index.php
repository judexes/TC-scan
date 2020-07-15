<!doctype html>
<html lang="en">
    <head>
        
        <!-- Meta Tags -->
        <title>Scan the Terms and Condition</title>
        <meta name="title" content="TCScan">
        <meta name="description" content="Your typical T & C Scanner">
        <meta name="author" content="Jude Okoroafor">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="robots" content="index, follow">
        <meta name="language" content="English">
        <meta name="keywords" content="Template, HTML, TCScan, scanner">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="style/vendors/animate.css/4.0.0/animate.min.css"/>
        <!-- Bootstrap core CSS -->
        <link href="style/vendors/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="style/main.css" rel="stylesheet">

        <link rel="icon" href="img/favicon.png" sizes="16x16" style="width: 80px;" type="image/png">
        
    </head>
    <body class="bg-white">
        <?php include "includes/dbconn.php"; // Using database connection file here ?>
        <div id="top offcanvas-close"></div>
        <!-- MENU SECTION -->
        <section class="">
            <!-- ------------------------ MAIN NAV ----------------------- -->
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-main ">
                <a class="navbar-brand mr-auto mr-lg-0 reload-page" href="#" id="Reloadpage" style="min-width: 80px;">
                    <img src="img/logo.png" alt="Logo Image" id="logo">
                </a>
                <span class=" mr-auto mr-lg-0 d-none d-sm-block socials " id="">
                    <img src="img/twitter.png" alt="image">
                    <img src="img/facebook.png" alt="image">
                    <img src="img/behance.png" alt="image">
                    <img src="img/instagram.png" alt="image">
                </span>
                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <!----------------------- SECONDARY NAV ------------------------->
        </section>
        <!-- HERO SECTION -->
        <section class="hero-section">
            <div class="splash">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-sm-5 mt-sm-5">
                            <div class="hero-description pb-5 pt-5 text-center">
                                    
                                <h1 class="mt-5 mb-2" style="font-weight: 900;">Coming soon!</h1>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-3">
                                            <span id="day"></span>
                                            <p>Days</p>
                                        </div>
                                        <div class="col-3">
                                            <span id="hour"></span>
                                            <p>hours</p>
                                        </div>
                                        <div class="col-3">
                                            <span id="min"></span>
                                            <p>Minutes</p>
                                        </div>
                                        <div class="col-3">
                                            <span id="sec"></span>
                                            <p>Seconds</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="hero-form">
                                        <form method="post" action="">
                                            <h2 class="mb-3 mt-4">Be the first to know when we launch</h2>
                                            <div class="input-group">
                                                <input type="email" class="form-control text-center" placeholder="Enter your email" name="userEmail" id="userEmail">
                                                <span class="input-group-btn">
                                                    <input type="submit" name="send" class="btn btn-theme" value="Subscribe">
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>                                
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <div class="preview-image mt-0 mt-sm-5 mt-md-5 mt-lg-5 ">
                                <img src="img/preview-image.png" alt="Image" class="img-fluid animate__animated animate__backInRight animate__delay-1s">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="about"></div>
            </div>
        </section>
        <!-- ABOUT SECTION -->
        <section class="about-us-section">
            <div class="container">
                
                <div class="justify-content-around row text-center">
                    <div class="col-10">
                        <div class="about-us about-us-description ml-2 mr-2">
                            <h6 class="subtitle font-weight-bold text-secondary">Features</h6>

                            <h2 class="title font-weight-bold">Watch our quick<br>introduction video</h2>
                            <p class="title-description">An app that scans the terms and conditions of a website or other apps and products so that you know what you're getting into before using that app or product</p>
                            <div class="introduction-video" style="width: -webkit-fill-available;">
                            <iframe width="" height="315" src="https://www.youtube.com/embed/0kiYxemsWeg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="width: inherit;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="services"></div>
            </div>
        </section>
        <section class="newsletter-section">
            <div class="home-newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="about-us about-us-description ml-2 mr-2 text-left ">
                                <h6 class="subtitle font-weight-bold text-secondary">Feel relaxed</h6>
                                <h2 class="title font-weight-bold text-light">Never again let you worry<br>about terms and conditions!</h2>
                                <p class="title-description text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vulputate quam<br>ut mi dictum, et euismod sapien condimentum.</p>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="about-us mr-sm-0 ml-sm-0 profile">
                                
                                <img class="img-fluid  animate__animated animate__backInRight animate__delay-4s" src="img/woman-hand.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- subscribe Modal -->
            <p class="text-muted text-center d-none">Wait! medium Modal will load in 1 seconds and large modal will load in 5 seconds.</p>
            <div class="modal fade text-center py-5"  id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document" style="margin-top: 5rem;">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="top-strip"></div>
                            <a href="#">
                                <img src="img/logo.png" alt="Logo Image">
                            </a>
                            <h3 class="pt-5 mb-0 text-secondary">&nbsp;</h3>
                            <p class="pb-1 text-muted"><small>Terms and Condition easy scanner is by the corner. Be the first to know when we launch.</small></p>
                            <form method="post" action="">
                                <div class="input-group mb-3 w-75 mx-auto">
                                    <input type="email" class="form-control" placeholder="tcscan@example.com" aria-label="Recipient's username" aria-describedby="button-addon2" name="userEmail" id="userEmail" required>
                                    <div class="input-group-append">
                                        <input class="btn btn-primary" type="submit" name="send" value="Notify Me">
                                    </div>
                                </div>
                            </form>
                            <p class="pb-1 text-muted"><small>Your email is safe with us. We won't spam.</small></p>
                            <div class="bottom-strip"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ABOUT SECTION -->
        <section class="howitworks-section">
            <div class="container">
                
                <div class="justify-content-around row text-center">
                    <div class="col-10">
                        <div class="ml-2 mr-2">
                            <h2 class="title font-weight-bold">Here's How It Works</h2>
                            <p class="title-description">When you visit a website or an app, the app gains access automatically with your approval to read the terms and conditions for you without any crossing any Red lines. Then it notifies you of certain clauses within the document being scanned.</p>
                            <div class="row icons">
                                <div class="col-4">
                                    <img src="img/download.png">
                                    <p>Download the App</p>
                                </div>
                                <div class="col-4">
                                    <img src="img/doc.png">
                                    <p>Sign Up</p>
                                </div>
                                <div class="col-4">
                                    <img src="img/sign-up.png">
                                    <p>Turn on Read Access</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="services"></div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="javascript/vendors/bootstrap.bundle.js"></script>
        <script src="javascript/script.js"></script>
    </body>
</html>