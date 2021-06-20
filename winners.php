<?php include("include/header.php"); ?>
<aside id="colorlib-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumbs text-center">
                <h2>Past Winners</h2>
                <p><span><a href="./">Home</a></span> / <span>Winners</span></p>
            </div>
        </div>
    </div>
</aside>

<div id="colorlib-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 content">

                <div class="row row-pb-md">
                    <?php
                $sql = "SELECT * FROM winners ORDER BY id desc";
                $res = query($sql);
                if (row_count($res) == "") {
                    echo '<a href="dashboard/./write"><h4 style="color: red;">&nbsp;&nbsp;&nbsp;No Winners yet!</h4></a>';
                } else {
                while($row = mysqli_fetch_array($res)) {
                	if($row['pix'] == '') {

                  	$a = "images/2.png";
                  } else{

                  	$a = 'artfile/'.$row['pix'];

                  } 

                  if($row['pix'] == '') {
                  	
                  	$b = "images/2.png";

                  } else {

                  	
                  	$b = 'artfile/dp/'.$row['pix'];

                  } 

                   
                    
                ?>
                    <div class="col-md-4">
                        <div class="blog-entry">
                            <div class="blog-img">
                                <a href="<?php echo $row['post_url']; ?>"><img src="<?php echo $a; ?>"
                                        class="img-responsive" style="width: 400px; height: 300px;"
                                        alt="<?php echo $row['title']; ?>"></a>
                            </div>
                            <div class="desc">

                                <h2><a href="<?php echo $row['post_url']; ?>"><?php echo $row['title']; ?></a></h2>
                                <p class="meta">
                                    <span style="text-transform: capitalize"><a href="<?php echo $row['post_url']; ?>">
                                            <b>All
                                                Time View:
                                                <?php echo number_format($row['totview']); ?> | Monthly
                                                View : <?php echo number_format($row['view']); ?> </b></a></span>
                                </p>
                                <br />
                                <span class="pos"> By <a
                                        href="<?php echo $row['post_url']; ?>"><?php echo $row['author']; ?></a></span>
                                <br /><br />
                                <div><a href="<?php echo $row['post_url']; ?>"><button class="btn btn-primary">Read
                                            Article</button></a></div>
                                <br />
                            </div>
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

</body>

</html>