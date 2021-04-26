<?php include("include/header.php"); ?>
	

		    <aside id="colorlib-hero">
		    	
            <div class="flexslider">
                <ul class="slides">
                	 <?php
                $sql = "SELECT * FROM article ORDER BY RAND() desc LIMIT 3";
                $res = query($sql);
                if (row_count($res) == "") {
                     echo '<a href="dashboard/./write"><h4 style="color: red;">&nbsp;&nbsp;&nbsp;Write an Article</h4></a>';
                } else {
                while($row = mysqli_fetch_array($res)) {
                  if($row['pix'] == '') {

                  	$row['pix'] = "images/2.png";
                  } 
                ?>
                    <li style="background-image: url('artfile/<?php echo $row['pix']; ?>');">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <p class="meta">
                                                
                                                <span class="date"><?php echo date('D, M d, Y', strtotime($row['datepost'])) ?></span>
                                                <span class="pos">By <a href="<?php echo $row['post_url']; ?>"><?php echo $row['author']; ?></a></span>
                                            </p>
                                            <h1><?php echo $row['title']; ?></h1>
                                           <div><a href="<?php echo $row['post_url']; ?>"><button class="btn btn-primary">Read More</button></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                     <?php
           }
       }
       ?>
                </ul>
            </div>
            
        </aside>
		<div id="colorlib-container">

			<div class="container">
				<h2><b>Latest Article</b></h2>
				<div class="row row-pb-md">
				<?php
                $sql = "SELECT * FROM article ORDER BY id desc LIMIT 3";
                $res = query($sql);
                if (row_count($res) == "") {
                     echo '<a href="dashboard/./write"><h4 style="color: red;">&nbsp;&nbsp;&nbsp;Write an Article</h4></a>';
                } else {
                while($row = mysqli_fetch_array($res)) {
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

                    $det = $row['details'];
                    /*$z = str_word_count($det);
                    $w = "...";
                    $y = substr_replace($det, $w, $z);*/
                    
                    $y = substr($det,0,strpos($det,' ',600)) . " ...";
                ?>
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="<?php echo $row['post_url']; ?>"><img src="<?php echo $a; ?>" class="img-responsive" style="width: 400px; height: 300px;" alt="<?php echo $row['title']; ?>"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="<?php echo $row['post_url']; ?>"><i class="icon-eye"></i> <?php echo number_format($row['view']); ?> </a></span>
                                <span class="pos">By <a href="<?php echo $row['post_url']; ?>"><?php echo $row['author']; ?></a></span>
								</p>
								<h2><a href="<?php echo $row['post_url']; ?>"><?php echo $row['title']; ?></a></h2>
								<p><?php echo $y; ?> ...</p>
								<br/>
								<div><a href="<?php echo $row['post_url']; ?>"><button class="btn btn-primary">Read More</button></a></div>
							</div>
						</div>
					</div>
					<?php
           }
       }
      
               
                ?>
            </div>

                <h2><b>Best-Read Author <i class="icon-star"></i></b></h2>
                <div class="row row-pb-md">
                	 <?php
                $sql = "SELECT * FROM article WHERE view BETWEEN 5 AND 1000000000000000 GROUP BY author ORDER BY view desc LIMIT 1";
                $res = query($sql);
                if (row_count($res) == "") {
                    echo '<a href="dashboard/./write"><h4 style="color: red;">&nbsp;&nbsp;&nbsp;Become the Best Read Author</h4></a>';
                } else {
                while($row = mysqli_fetch_array($res)) {
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

                    $det = $row['details'];
                    /*$z = str_word_count($det);
                    $w = "...";
                    $y = substr_replace($det, $w, $z);*/
                    
                    $y = substr($det,0,strpos($det,' ',600)) . " ...";
                ?>
                	<div class="col-md-8">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="<?php echo $row['post_url']; ?>"><img style="width: 900px; max-height: 700px; min-height: 500px;" src="<?php echo $b; ?>" class="img-responsive" alt="<?php echo $row['author']; ?>"></a>
							</div>
							<div class="desc">
								
								<h2><a href="<?php echo $row['post_url']; ?>"><?php echo $row['author']; ?></a></h2>
								<p>Author Mail: <b><?php echo $row['author_mail']; ?></b> </p>
							</div>
						</div>
					</div>	
                	<div class="col-md-4">
                		<h2><b>Best-Read Article <i class="icon-star"></i></b></h2>
						<div class="blog-entry">
							<div class="blog-img">
								<a href="<?php echo $row['post_url']; ?>"><img src="<?php echo $a; ?>" class="img-responsive" style="width: 400px; height: 300px;" alt="<?php echo $row['title']; ?>"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="<?php echo $row['post_url']; ?>"><i class="icon-eye"></i> <?php echo number_format($row['view']); ?> </a></span>
                                <span class="pos">By <a href="<?php echo $row['post_url']; ?>"><?php echo $row['author']; ?></a></span>
								</p>
								<h2><a href="<?php echo $row['post_url']; ?>"><?php echo $row['title']; ?></a></h2>
								<a href="<?php echo $row['post_url']; ?>"><button class="btn btn-primary">Read Article</button></a>
							</div>
					</div>	
					</div>
					
						<?php
           }
       }
      
               
                ?>
				</div>




                <h2><b>Trending Articles</b></h2>
				<div class="row row-pb-md">
				 <?php
                $sql = "SELECT * FROM article ORDER BY view desc LIMIT 3";
                $res = query($sql);
                if (row_count($res) == "") {
                     echo '<a href="dashboard/./write"><h4 style="color: red;">&nbsp;&nbsp;&nbsp;Write an Article</h4></a>';
                } else {
                while($row = mysqli_fetch_array($res)) {
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
                    $det = $row['details'];
                    /*$z = str_word_count($det);
                    $w = "...";
                    $y = substr_replace($det, $w, $z);*/
                    
                    $y = substr($det,0,strpos($det,' ',600)) . " ...";
                ?>
					<div class="col-md-4">
						
						<div class="blog-entry">
							<div class="blog-img">
								<a href="<?php echo $row['post_url']; ?>"><img src="<?php echo $a; ?>" class="img-responsive" style="width: 400px; height: 300px;" alt="<?php echo $row['title']; ?>"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="<?php echo $row['post_url']; ?>"><i class="icon-eye"></i> <?php echo number_format($row['view']); ?> </a></span>
                                <span class="pos">By <a href="<?php echo $row['post_url']; ?>"><?php echo $row['author']; ?></a></span>
								</p>
								<h2><a href="<?php echo $row['post_url']; ?>"><?php echo $row['title']; ?></a></h2>
								<p><?php echo $y; ?> ...</p>
								</p>
								<div><a href="<?php echo $row['post_url']; ?>"><button class="btn btn-primary">Read More</button></a></div>
							</div>
						</div>
					</div>
					
					<?php
				}
			}
			?>
				</div>

				<h2><b>Suggested Articles</b></h2>
				<div class="row row-pb-md">
					 <?php
                $sql = "SELECT * FROM article ORDER BY RAND() LIMIT 1";
                $res = query($sql);
                if (row_count($res) == "") {
                     echo '<a href="dashboard/./write"><h4 style="color: red;">&nbsp;&nbsp;&nbsp;Write an Article</h4></a>';
                } else {
                while($row = mysqli_fetch_array($res)) {
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
                  
                    $det = $row['details'];
                    /*$z = str_word_count($det);
                    $w = "...";
                    $y = substr_replace($det, $w, $z);*/
                    
                    $y = substr($det,0,strpos($det,' ',600)) . " ...";
                ?>
					<div class="col-md-4">
						<div class="blog-entry">
							<div class="blog-img">
								<a href="<?php echo $row['post_url']; ?>"><img src="<?php echo $a; ?>" class="img-responsive" style="width: 400px; height: 300px;" alt="<?php echo $row['title']; ?>"></a>
							</div>
							<div class="desc">
								<p class="meta">
									<span class="cat"><a href="<?php echo $row['post_url']; ?>"><i class="icon-eye"></i> <?php echo number_format($row['view']); ?> </a></span>
                                <span class="pos">By <a href="<?php echo $row['post_url']; ?>"><?php echo $row['author']; ?></a></span>
								</p>
								<h2><a href="<?php echo $row['post_url']; ?>"><?php echo $row['title']; ?></a></h2>
								<p><?php echo $y; ?> ...</p>
								</p>
								<div><a href="<?php echo $row['post_url']; ?>"><button class="btn btn-primary">Read More</button></a></div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<h2><b>Suggested Author</b></h2>
						<div class="blog-entry">
							<div class="blog-img">
								<a href="<?php echo $row['post_url']; ?>"><img src="<?php echo $b; ?>" class="img-responsive" style="width: 900px; max-height: 700px; min-height: 500px;" alt="<?php echo $row['author']; ?>"></a>
							</div>
							<div class="desc">
								<h2><a href="<?php echo $row['post_url']; ?>"><?php echo $row['author']; ?></a></h2>
								<p>Author Mail: <b><?php echo $row['author_mail']; ?></b> </p>
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

