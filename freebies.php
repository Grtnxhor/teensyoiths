<?php include("include/header.php");





?>



<div id="colorlib-container">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/8.jpg" alt="">
            </div>

            <div class="col-md-6">
                <br />
                <h2><b>DOWNLOAD 2021 JAMB PAST QUESTIONS</b></h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="account" href="JAMB PAST QUESTIONS/JAMB-ACCOUNTS-PAST-QUESTIONS.pdf" target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>JAMB-ACCOUNTS-PAST-QUESTIONS</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'account'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="act"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="biology" href="JAMB PAST QUESTIONS/JAMB-BIOLOGY-PAST-QUESTIONS.pdf" target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>JAMB-BIOLOGY-PAST-QUESTIONS</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'biology'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="bio"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="chemistry" href="JAMB PAST QUESTIONS/JAMB-CHEMISTRY-PAST-QUESTIONS.pdf"
                                target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>JAMB-CHEMISTRY-PAST-QUESTIONS</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'chemistry'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="chm"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="commerce" href="JAMB PAST QUESTIONS/JAMB-COMMERCE-PAST-QUESTIONS.pdf"
                                target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>JAMB-COMMERCE-PAST-QUESTIONS</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'commerce'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="com"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="crk" href="JAMB PAST QUESTIONS/JAMB-CRK-PAST-QUESTIONS.pdf" target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>JAMB-CRK-PAST-QUESTIONS</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'crk'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="ck"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="economics" href="JAMB PAST QUESTIONS/JAMB-ECONOMICS-PAST-QUESTIONS.pdf"
                                target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>JAMB-ECONOMICS-PAST-QUESTIONS</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'economics'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="eco"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="english" href="JAMB PAST QUESTIONS/JAMB-LIT-IN-ENGLISH-PAST-QUESTIONS.pdf"
                                target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>JAMB-LIT-IN-ENGLISH-PAST-QUESTIONS</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'english'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="lit"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="maths" href="JAMB PAST QUESTIONS/JAMB-MATHEMATICS-PAST-QUESTIONS.pdf"
                                target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>JAMB-MATHEMATICS-PAST-QUESTIONS</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'maths'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="mat"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="phy" href="JAMB PAST QUESTIONS/JAMB-PHYSICS-PAST-QUESTIONS.pdf" target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>JAMB-PHYSICS-PAST-QUESTIONS</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'phy'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="ph"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="uoe" href="JAMB PAST QUESTIONS/JAMB-USE-OF-ENGLISH-PAST-QUESTIONS.pdf"
                                target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>JAMB-USE-OF-ENGLISH-PAST-QUESTIONS</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'uoe'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="uo"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="lifechange" href="JAMB PAST QUESTIONS/QAs-from-THE-LIFE-CHANGER-1.pdf"
                                target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>QAs-from-THE-LIFE-CHANGER-1</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'lifechange'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="life"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="colorlib-container">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <br />
                <h2><b>MORE FREEBIES TO ENJOY DURING YOUR LEISURE</b></h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="nude" href="JAMB PAST QUESTIONS/The Nude Lady & The Free Gift - A Short Story.pdf"
                                target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>The Nude Lady & The Free Gift - A Short Story</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'nude'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="nud"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="joke" href="JAMB PAST QUESTIONS/Laugh For God's Sake.pdf" target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>Laugh For God's Sake: A Collection of Clean Joke</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'joke'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="jk"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="mb1" href="JAMB PAST QUESTIONS/Words on Marble 1 by Sam O Salau.pdf" target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>Words on Marble 1 by Sam O Salau</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'mb1'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="m1"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>



                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a id="mb2" href="JAMB PAST QUESTIONS/Words on Marble 2 by Sam O Salau.pdf" target="_blank">
                                <img src="images/9.jpeg" alt="Lights" style="width:100%">
                                <div class="caption">
                                    <p>Words on Marble 2 by Sam O Salau</p>
                                    <?php
                                     //get count
                                    $sql = "SELECT * FROM `linkcount` WHERE `link` = 'mb2'";
                                    $rsl = query($sql);
                                    $row = mysqli_fetch_array($rsl);
                                    ?>
                                    <p><span id="m2"><?php echo number_format($row['count']) ?></span> Downloads</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 float-right">
                <img class="img-responsive" src="images/10.jpg" alt="">
            </div>

        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="js/main.js"></script>


<!---getting count link  --->
<script src="aja.js"></script>

</body>

</html>