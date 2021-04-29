<?php include("functions/init.php"); ?>
<!DOCTYPE HTML>
<html>

<head>
    <title>TeensYouth</title>
     <meta charset="UTF-8">
    <meta name="description" content="Let the revolution begin...">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>TeensYouth</title>

    <!-- Favicon -->
    <link rel="icon" href="images/2.png">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>


    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="colorlib-logo"><img src="images/2.png" alt="TeensYouths" width="120px" height="60px"></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li><a href="./">Home</a></li>
                                 <li><a href="./about">About Us</a></li>
                                <li><a href="./articles">Articles</a></li>
                                <li><a href="dashboard/./write">Write an Article</a></li>
                                <?php
if(!isset($_SESSION['user']) && !isset($_SESSION['Username'])) {          
?>
                                <li><a href="./signup">Create a free account</a></li> 
                                <?php
                                } else {
                                echo '<li><a style="color:red;" href="dashboard/./"><b>My DashBoard</b></a></li> ';
                                }                          
                               ?>                               
                            <li><a href="./signin">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
