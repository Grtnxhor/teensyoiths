<?php include("include/header.php");

if(isset($_SESSION['user']) || isset($_SESSION['Username'])) {
	session_destroy();
	redirect("./signin");
} else {

 ?>
	

		    <aside id="">
		    	
            <div class="flexslider">
            	<div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                    <div >
                                        <div class="desc">
                                        	 <h1><b>Password Reset Link Sent Successfully</b></h1>
                                            <p class="meta">
                                                <br/>
                                                <span class="date">- Check your inbox</span><br/>
                                                <span class="pos">- Check your spam folders</span>
                                            </p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
               
            </div>
            
        </aside>
	
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

	</body>
</html>
<?php
}
?>