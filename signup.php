<?php include("include/header.php");

if(isset($_SESSION['user']) || isset($_SESSION['Username'])) {
	session_destroy();
	redirect("./signup");
} else {

 ?>

		<aside id="colorlib-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12 breadcrumbs text-center">
						<h2>Create A Free Account</h2></p>
					</div>
				</div>
			</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row">
					
					<div class="col-md-12">
						<div class="row">

							<div class="col-md-12">
								<h2 class="heading-2">Join the Gen-X Revolution</h2>
								<form action="#">
									<div class="row form-group">
										<div class="col-md-6">
											<label for="fname">Full Name</label>
											<input type="text" id="fname" class="form-control" placeholder="Input Your Full Name">
										</div>
										<div class="col-md-6">
											<label for="lname">Create a username</label>
											<input type="text" id="usname" class="form-control" placeholder="Create your username">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-12">
											<label for="email">Email</label>
											<input type="email" id="email" class="form-control" placeholder="Input your email address">
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-6">
											<label for="fname">Create a password</label>
											<input type="password" id="pword" class="form-control" placeholder="Create a password">
										</div>
										<div class="col-md-6">
											<label for="lname">Confirm Password</label>
											<input type="password" id="cpword" class="form-control" placeholder="Re-type your password here">
										</div>
									</div>


									<div class="row form-group">
										<div class="col-md-12">
											<label for="subject">Phone</label>
											<input type="number" id="tel" class="form-control" placeholder="Input your telephone number">
										</div>
									</div>

								
									<div class="form-group row">
										<input type="button" id="nxtSign" value="Create Free Account" class="btn btn-primary">
										<a href="./signin" class="btn btn-primary">Have an Account</a>
									</div>

								</form>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- Modal -->
<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div style="background: #f9f9ff; color: #ff0000;" class="modal-content">
            <div class="modal-body">
                <div id="msg" class="text-center"></div>
            </div>
        </div>
    </div>
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
	<script src="ajax.js"></script>

	</body>
</html>
<?php
}
?>