<?php include("functions/init.php"); 

//get the last day in a month
$a_date = date("M d, Y");
$tot = date("M t, Y", strtotime($a_date));


//get the last day of that month when uploading article in the db
$sql = "SELECT * FROM article";
$res = query($sql);
if(row_count($res) != '') {
while($row = mysqli_fetch_array($res)) {
    
    //get the last day here
    //$abs = date('M d, Y', strtotime($row['lastdate']));

    //on load, check if the present date is greater than the last day gotten
    if ($a_date == $tot) {

    //get constants
    $view    = $row['view'];
    $totview = $row['view'] + $row['totview'];

    //if true, update monthly and annual view, and update the next last day
    $ssl = "UPDATE article SET `view` = '0', `totview` = '$totview', `lastdate` = '$tot'";
    $r   = query($ssl);
           
    }
} //else do nothing
}

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>TeensYouths</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="description" content="TeensYouths - Join the Gen-X Revolution">
    <meta name="keywords" content="TeensYouths - Join the Gen-X Revolution">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="theme-color" content="#f9f9ff">

    <!-- Favicon -->
    <link rel="icon" href="images/2.png">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="TeensYouths" />
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

    <link rel="manifest" href="manifest.json">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <!-- adsense --->
    <script data-ad-client="ca-pub-8978686164104279" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>

<body>


    <div id="page">
        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="colorlib-logo"><img src="images/2.png" alt="TeensYouths" width="120px"
                                    height="60px"></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li><a href="./">Home</a></li>
                                <li><a href="./about">About Us</a></li>
                                <li><a href="./articles">Articles</a></li>
                                <li><a href="dashboard/./write">Write an Article</a></li>
                                <li><a href="./winners">Past Winners</a></li>
                                <li><a href="./freebies">Freebies</a></li>
                                <li><a href="./faqs">FAQs</a></li>
                                <?php
if(!isset($_SESSION['user']) && !isset($_SESSION['Username'])) {          
?>
                                <li><a href="./signup">Signup</a></li>
                                <?php
                                } else {
                                echo '<li><a style="color:red;" href="dashboard/./"><b>My DashBoard</b></a></li> ';
                                }                          
                               ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>