<?php
    include 'classes/Api.php';
    include 'classes/RatingAverage.php';
    include 'classes/Review.php';
?>
<!DOCTYPE html>
<!--
    Author: Roberto Di Biase
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Assignment - Template - API &amp; Widget Prototype - Roberto Di Biase">
        <title>API Project
            <?php
            if (isset($_GET['content'])) {
                switch ($_GET['content']) {
                    case 'home':
                        echo '| Home';
                        break;
                    case 'reviews':
                        echo '| Reviews';
                        break;
                    case 'contactUs':
                        echo "| Contact Us";
                        break;
                }
            } else {
                echo '| Home';
            }
            ?>
        </title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="assets/css/mainStyle.css">
    </head>
    <body>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
            <div class="container"><a class="navbar-brand logo" href="index.php?content=home">API Project</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                     id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <?php
                        $content;
                        if (isset($_GET['content'])) {
                            $content = $_GET['content'];
                            //sanitize it for security reasons
                            $content = filter_var($content, FILTER_SANITIZE_STRING);
                        }
                        ?>
                        <li class="nav-item" role="presentation"><a class="nav-link <?php if ($content == 'home' or empty($content)) {echo'active';} ?>"  href="index.php?content=home">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link <?php if ($content == 'reviews' or empty($content)) {echo'active';} ?>"  href="index.php?content=reviews">Reviews</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link <?php if ($content == 'contactUs' or empty($content)) {echo'active';} ?>"  href="index.php?content=contactUs">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="page landing-page">
            <?php
            //set up the home page as default
            $content = (empty($content)) ? "home" : $content;
            //inclode the chosen page
            include 'content/' . $content . '.php';
            ?>
        </main>
        <footer class="page-footer dark"id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <h5 class="darkGreen">Get Started</h5>
                        <ul>
                            <li><a href="index.php?content=home"><i class="fas fa-home darkGreen"></i> Home</a></li>
                            <li><a href="index.php?content=reviews"><i class="fas fa-film"></i> Reviews</a></li>
                            <li><a href="#"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6  col-md-3 col-lg-3">
                        <h5>About us</h5>
                        <ul>
                            <li><a href="#"><i class="fas fa-address-book"></i> About us</a></li>
                            <li><a href="index.php?content=countactUs"><i class="fas fa-inbox"></i> Contact us</a></li>
                            <li><a href="#"><i class="fas fa-sitemap"></i> Site Map</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="social-networks">
                            <a href="https://twitter.com/" target="blank" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/" target="blank" class="facebook"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://www.instagram.com/" target="blank" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.snapchat.com/" target="blank" class="snapchat"><i class="fab fa-snapchat-ghost"></i></a>
                            <a href="https://plus.google.com/discover" target="blank" class="google"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>© 2018 Copyright - Roberto Di Biase</p>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/script.min.js"></script>   
    </body>
</html>
