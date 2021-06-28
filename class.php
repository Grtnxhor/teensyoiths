<?php include("include/header.php");


$sql ="SELECT * FROM `admin`";
$rsl = query($sql);
$rdf = mysqli_fetch_array($rsl);


?>




<div id="colorlib-container">
    <div class="container">
        <!--<h2><b></b></h2>-->
        <iframe src="<?php echo $rdf['gform']; ?>" style="height:100vh;width:100%;border: none;"
            title="Iframe Example"></iframe>
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