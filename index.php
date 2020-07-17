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
        <!-- Lightbos CSS -->
        <link rel="stylesheet" href="style/vendors/lightbox2-2.1.1/lightbox.min.css">
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

        <!-- MENU SECTION -->
        <section class="">
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-main ">
                <a class="navbar-brand mr-auto mr-lg-0 reload-page" href="#" id="Reloadpage">
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
        </section>

        <!-- HERO SECTION -->
        <section class="hero-section">
            <div class="splash">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-sm-5 mt-sm-5">
                            <div class="hero-description pb-5 pt-5 text-center">
                                    
                                <h1 class="mt-5 mb-4" style="font-weight: 900;">Coming soon!</h1>
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
        
        <!-- FEEL RELAXED SECTION -->
        <section class="feel-relaxed-section">
            <div class="feel-relaxed">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="about-us about-us-description ml-2 mr-2 text-left ">
                                <h6 class="subtitle font-weight-bold text-secondary">Feel relaxed</h6>
                                <h2 class="title font-weight-bold text-light">Never again let you worry<br>about terms and conditions!</h2>
                                <p class="title-description text-light">Just by entering a url, we scan the site's terms and conditions and noting down Kew paragraphs using our TCScan Sensei, the powerful AI behind many of our intelligent features.
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
        </section>

        <!-- HOW IT WORKS SECTION -->
        <section class="howitworks-section">
            <div class="container">
                <div class="justify-content-around row text-center">
                    <div class="col-10">
                        <div class="ml-2 mr-2">
                            <h2 class="title font-weight-bold">Here's How It Works</h2>
                            <p class="title-description">When you visit a website or an app, the app gains access automatically with your approval to read the terms and conditions for you without any crossing any Red lines. Then it notifies you of certain clauses within the document being scanned.</p>
                            <div class="row icons mt-5">
                                <div class="col-4">
                                    <img src="img/download.png">
                                    <p>Download the App</p>
                                </div>
                                <div class="col-4">
                                    <img src="img/doc.png">
                                    <p>Sign Up</p>
                                </div>
                                <div class="col-4">
                                    <img src="img/sign-up.png" style="max-width: 35px!important;">
                                    <p>Turn on Read Access</p>
                                </div>
                            </div>
                            <div class="row screens-preview mt-5">
                                <div class="col-4">
                                    <a class="preview-image-link" href="img/screen2.png" data-lightbox="preview-screen-set" data-title="Click the right half of the image to move forward.">
                                        <img class="preview-screen-image img-fluid animate__animated animate__backInLeft animate__delay-2s" src="img/screen1.png" alt=""/>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="preview-image-link" href="img/screen2.png" data-lightbox="preview-screen-set" data-title="Click the right half of the image to move forward.">
                                        <img class="preview-screen-image img-fluid animate__animated animate__backInTop animate__delay-2s" src="img/screen2.png" alt=""/>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="preview-image-link" href="img/screen3.png" data-lightbox="preview-screen-set" data-title="Click the right half of the image to move forward.">
                                        <img class="preview-screen-image img-fluid animate__animated animate__backInRight animate__delay-2s" src="img/screen3.png" alt=""/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="services"></div>
            </div>
        </section>
        
        <!-- REACH US SECTION -->
        <section class="reach-us-section">
            <div class="reach-us">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="about-us about-us-description ml-2 mr-2 text-left ">
                                <h6 class="subtitle font-weight-bold text-secondary">AI-Enhanced Scans</h6>
                                <h2 class="title font-weight-bold text-light">Intelligently scan<br>anything in a snap</h2>
                                <p class="title-description text-light">TCScan Sensei, the powerful AI behind many of our intelligent features. We scan even physical document and identify the clauses in the terms and conditions while eliminating the hassle of reading and studying the whole document before finding a clause</p>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="about-us mr-sm-0 ml-sm-0 profile">
                                
                                <img class="img-fluid  animate__animated animate__backInRight animate__delay-4s" src="img/call-us.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </section>

        <!-- SUBSCRIBE POP UP SECTION -->
        <section>
            <p class="text-muted text-center d-none">Wait! medium Modal will load in 1 seconds and large modal will load in 5 seconds.</p>
            <div class="modal fade text-center py-5 animate__animated animate__backInRight animate__delay-6s"  id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

        <section class="footer-section pt-4 pb-4">
            <div class="container-fluid copyright">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center text-white mb-0">&copy; 2020</p>
                    </div>
                </div>
            </div>
        </section>


<!-- TEST CODE SECTION -->

<!-- END TEST CODE SECTION -->




        <!-- Lightbox JS -->
        <script src="javascript/vendors/lightbox2-2.1.1/lightbox-plus-jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="javascript/vendors/bootstrap.bundle.js"></script>
        <script src="javascript/script.js"></script>
    </body>
</html>