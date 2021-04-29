<?php include("include/header.php");
if (!isset($_GET['read'])) {
    
    redirect("./articles");
} else {

    $data = $_GET['read'];
    $sql = "SELECT * FROM article WHERE `post_url` = '$data'";
    $res = query($sql);
    if (row_count($res) == "") {
        
      redirect("./opps");  
    } else {

        $row = mysqli_fetch_array($res);

       if($row['pix'] == '') {

                  	$a = "images/2.png";
                  } else{

                  	$a = 'artfile/'.$row['pix'];

                  } 

                  if($row['propix'] == '') {
                  	
                  	$b = "images/2.png";

                  } else {

                  	
                  	$b = 'artfile/dp/'.$row['propix'];

                  }


        $ipp  = $_SERVER['REMOTE_ADDR'];  // get ip address
        $post_url = $data;

        if (isset($_SESSION['Username'])) {
        
        $user = $_SESSION['Username'];

        //chck if the user match article author
        if ($row['author'] == $user) {
            //do nothing
        } else {

        //chck if IP exists
        $ssl = "SELECT * FROM viewer WHERE `art` = '$data' AND `ip` = '$ipp'";
        $rsl = query($ssl);
        if (row_count($rsl) == '') {            
          
        //insert ip address into db
        $isl = "INSERT INTO viewer(`ip`, `art`)";
        $isl.= "VALUES('$ipp', '$data')";
        $qws = query($isl);

        //get the view last value
        $we = "SELECT * FROM article WHERE `post_url` = '$data'";
        $ew = query($we);
        $my = mysqli_fetch_array($ew);

        $vw = $my['view'] + 1;

        //update views
        $drt = "UPDATE article SET `view` = '$vw' WHERE `post_url` = '$data'";
        $drs = query($drt);

        } else {
        //do nothing
        }
        }
    } else {


        //chck if IP exists
        $ssl = "SELECT * FROM viewer WHERE `art` = '$data' AND `ip` = '$ipp'";
        $rsl = query($ssl);
        if (row_count($rsl) == '') {            
          
        //insert ip address into db
        $isl = "INSERT INTO viewer(`ip`, `art`)";
        $isl.= "VALUES('$ipp', '$data')";
        $qws = query($isl);

        //get the view last value
        $we = "SELECT * FROM article WHERE `post_url` = '$data'";
        $ew = query($we);
        $my = mysqli_fetch_array($ew);

        $vw = $my['view'] + 1;

        //update views
        $drt = "UPDATE article SET `view` = '$vw' WHERE `post_url` = '$data'";
        $drs = query($drt);

        } else {
        //do nothing
        }

    }
    }
}
 ?>
		<aside id="colorlib-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12 breadcrumbs text-center">
						<h2>Article Details</h2>
						<p><span><a href="./">Home</a></span> / <span><a href="./articles">Articles </a></span> / <span>Article Details</span></p>
					</div>
				</div>
			</div>
		</aside>

		<div id="colorlib-container">
			<div class="container">
				<div class="row">
					<div class="col-md-9 content">
						<div class="row row-pb-lg">
							<div class="col-md-12">
								<div class="blog-entry">
									<div class="blog-img blog-detail">
										<img style="width: 800px; height: 400px;" src="<?php echo $a ?>" class="img-responsive" alt="<?php echo $row['title'] ?>">
									</div>
									
									<div class="desc">
										<p class="meta">
											<span class="cat"><a href="#"><?php echo $row['view'] ?><i class="icon-eye"></i></a></span>
											<span class="date"><?php echo date('D, M d, Y', strtotime($row['datepost'])) ?></span>
											<span class="pos">By <a href="#"><?php echo $row['author'] ?></a></span>
										</p>
										<h2><a href="#"><?php echo $row['title'] ?></a></h2>

										
										<p><?php echo $row['details'] ?></p>
									
										<ul class="colorlib-social-icons">
								<li><a style="font-size: 20px;" href="#"><b>Share:</b></a></li>
								<li><a target="_blank" data-media="<?php echo $row['pix']; ?>" href="https://twitter.com/home?status=https://teensyouths.com.ng/<?php echo $row['post_url'] ?>"><i class="icon-twitter"></i></a></li>
								<li><a target="_blank" data-media="<?php echo $row['pix']; ?>" href="https://facebook.com/sharer.php?u=https://teensyouths.com.ng/<?php echo $row['post_url'] ?>"><i class="icon-facebook"></i></a></li>
								<li><a target="_blank" data-action="share/whatsapp/share" data-media="<?php echo $row['pix']; ?>" href="https://api.whatsapp.com/send?text=https://teensyouths.com.ng/<?php echo $row['post_url'] ?>"><i class="icon-whatsapp"></i></a></li>
							</ul>
									</div>

									
								</div>
							</div>
						</div>
						<div class="row row-pb-lg">
							<div class="col-md-12">
								<h2 class="heading-2">Comments</h2>
								 <?php 
                        $weds = $row['post_url'];
                        $sql = "SELECT * FROM comment WHERE `post_url` = '$weds'";
                        $res = query($sql);
                        if (row_count($res) == '') {
                        	echo '<h4>No Comment Posted</h4>';
                        } else {
                        while ($row3 = mysqli_fetch_array($res)) {
                            
                        ?>
								<div class="review">
						   		<div class="user-img" style="background-image: url(images/2.png)"></div>
						   		<div class="desc">
						   			<h4>
						   				<span class="text-left"><?php echo $row3['fname'] ?></span>
						   				<span class="text-right"><?php echo date('D, M d, Y  ', strtotime($row3['date'])) ?></span>
						   			</h4>
						   			<p><?php echo $row3['text'] ?></p>
						   			<!---<p class="star">
					   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
						   			</p>--->
						   		</div>
						   	</div>
						   	<?php
						   }
						}
						   ?>
						   	
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2 class="heading-2">Say something</h2>
								<form action="#">
									<div class="row form-group">
										<div class="col-md-6">
											<!-- <label for="fname">First Name</label> -->
											<input type="text" id="cfname" class="form-control" placeholder="Input Your Fullname">
										</div>
										<div class="col-md-6">
											<!-- <label for="lname">Last Name</label> -->
											<input type="email" id="cemail" class="form-control" placeholder="Input Your Email">
										</div>
									</div>

									 <input id="cpost" type="text" class="form-control" id="contact-email" placeholder="Email" value="<?php echo $data ?>" hidden>									

									<div class="row form-group">
										<div class="col-md-12">
											<!-- <label for="message">Message</label> -->
											<textarea name="message" id="cxt" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
										</div>
									</div>
									<div class="form-group">
										<button type="button" id="cbtn" class="btn btn-primary">Post Comment</button>
									</div>
								</form>	
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="sidebar">
							
							
							<div class="side">
								<h2 class="sidebar-heading">Articles from the same author</h2>
								<?php
                            $rd = $row['author'];
                $sql2 = "SELECT * FROM article WHERE `author` = '$rd' ORDER BY RAND()";
                $res2 = query($sql2);
                if (row_count($res2) == "") {
                    echo 'No uploaded articles yet';
                } else {
                while($row2 = mysqli_fetch_array($res2)) {
				
				if($row2['pix'] == '') {

                  	$a = "images/2.png";
                  } else{

                  	$a = 'artfile/'.$row2['pix'];

                  } 

                  if($row2['propix'] == '') {
                  	
                  	$b = "images/2.png";

                  } else {

                  	
                  	$b = 'artfile/dp/'.$row2['propix'];

                  }
                ?>
								<div class="f-blog">
									<a href="<?php echo $row2['post_url']; ?>" class="blog-img" style="background-image: url(<?php echo $a; ?>);">
									</a>
									<div class="desc">
										<h3><a style="color: red;" href="<?php echo $row2['post_url']; ?>"><?php echo $row2['title']; ?></a></h3>
										<p class="admin"><span><?php echo date('D, M d, Y ', strtotime($row2['datepost'])) ?></span></p>
									</div>
								</div>
								
								<?php
							}
						}
						?>
							</div>
							</div>
					</div>
				</div>
			</div>
		</div>

<?php include("include/footer.php"); ?>
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
	<script type="text/javascript">
		document.getElementById('cpost').style.display = 'none';
	</script>
	</body>
</html>

