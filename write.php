<?php include("functions/top.php");

if (!isset($_SESSION['Username']) || !isset($_SESSION['user'])) {
    
    redirect("./signup");
}

 ?>

<!-- ##### Hero Area Start ##### -->
<section class="hero-area hero-post-slides owl-carousel">
    <!-- Single Hero Slide -->
    <div class="single-hero-slide bg-img bg-overlay d-flex align-items-center justify-content-center"
        style="background-image: url(img/bg-img/15.jpg);">
        <!-- Post Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-slides-content">
                        <h2 data-animation="fadeInUp" data-delay="100ms">THE GEN-X REVOLUTION</h2>
                        <p data-animation="fadeInUp" data-delay="300ms">Share what you`ve got for us today!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->
<!-- ##### Google Maps End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area" id="upl">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-content-area">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading">
                                <h2>Let`s get your article ready</h2>
                                <p>Required fields are marked.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Contact Form Area -->
                            <div class="contact-form-area">
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <?php 
                                $_SESSION['det'] = '<p id="demo"></p>'
                                ?>
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="contact-name">Article Title*:</label>
                                                <input style="color: black;" name="title" type="text"
                                                    class="form-control" id="contact-name"
                                                    placeholder="Input your article title here" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group" id="editor">
                                                <label for="message">Article Details*:</label>

                                                <textarea class="textarea"
                                                    placeholder="Lets your view on the subject matter" name="det"
                                                    id='edit'
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                                                    required></textarea>
                                            </div>
                                        </div>


                                        <div class="col-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="contact-number">Upload an article image <span
                                                        style="color: red;">(.jpg and .Jpeg formats
                                                        only)</span>*:</label>
                                                <input type="file" name="fileToUpload" class="form-control"
                                                    id="fileToUpload">
                                            </div>
                                        </div>


                                        <div class="col-12 text-center">
                                            <button name="write" type="submit" class="btn crose-btn mt-15">Next
                                                Step</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->


<?php include("includes/footer.php"); ?>

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

<!-- Summernote -->
<script src="summernote/summernote-bs4.min.js"></script>
<script>
$(function() {
    // Summernote
    $('.textarea').summernote()
})
</script>
</body>

</html>