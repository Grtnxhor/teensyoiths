<?php include("functions/top.php"); ?>

<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Articles</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-100">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Blog Post Area -->
            <div class="col-12 col-lg-12">
                <div class="row">
                    <?php
                $sql = "SELECT * FROM article ORDER BY RAND()";
                $res = query($sql);
                if (row_count($res) == "") {
                    echo 'No uploaded articles yet';
                } else {
                while($row = mysqli_fetch_array($res)) {
                    $det = $row['details'];
                    /*$z = str_word_count($det);
                    $w = "...";*/
                    $y = substr($det,0,strpos($det,' ',600)) . " ...";
                ?>
                    <!-- Single Blog Post Area -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post mb-50">
                            <div class="post-thumbnail">
                                <a href="#"><img style="width: 100%; height: 250px;" src="<?php echo $row['pix']; ?>"
                                        alt=""></a>
                            </div>
                            <div class="post-content">
                                <a style="color: red; text-decoration: none;" href="./<?php echo $row['post_url']; ?>"
                                    class="post-title">
                                    <h4><?php echo $row['title']; ?></h4>
                                </a>
                                <div class="post-meta d-flex">
                                    <a style="text-decoration: none;" href="#"><i class="fa fa-user"
                                            aria-hidden="true"></i> <?php echo $row['author']; ?></a>
                                    <a style="text-decoration: none;" href="#"><i class="fa fa-eye"
                                            aria-hidden="true"></i> <?php echo $row['view'] ?></a>

                                </div>
                                <p class="post-excerpt"><?php echo $y; ?></p>
                                <a href="<?php echo $row['post_url']; ?>" class="btn crose-btn btn-2">Read More</a>
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
<!-- ##### Blog Area End ##### -->

<!-- ##### Subscribe Area Start ##### -->
<section class="subscribe-area">
    <div class="container">
        <div class="row align-items-center">
            <!-- Subscribe Text -->
            <div class="col-12 col-lg-6">
                <div class="subscribe-text">
                    <h3>Subscribe To Receive Updates</h3>
                    <h6>Enter your email address to receive blog updates.</h6>
                </div>
            </div>
            <!-- Subscribe Form -->
            <div class="col-12 col-lg-6">
                <div class="subscribe-form text-right">
                    <form>
                        <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Your Email">
                        <button type="button" id="subbtn" class="btn crose-btn">SEND ME FREE UPDATES</button>
                        <i>
                            <p id="err" style="color: white;">*We won't share your information with anyone.</p>
                        </i>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Subscribe Area End ##### -->

<?php include("includes/footer.php"); ?>

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
<script src="ajax.js"></script>
</body>

</html>