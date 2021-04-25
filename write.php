<?php include("include/header.php"); ?>

<aside id="colorlib-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumbs text-center">
                <h2>Write an Article</h2>
                </p>
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
                        <h2 class="heading-2">Share what you've got for us today!</h2>
                        <form action="#">
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="fname">Article Title</label>
                                    <input type="text" id="fname" class="form-control"
                                        placeholder="Input Your Full Name">
                                </div>

                                <div class="col-md-12">
                                    <label for="lname">Article Details</label>
                                    <textarea class="textarea" name="det" id='edit' required></textarea>

                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="email">Upload File</label>
                                    <input type="file" id="email" class="form-control"
                                        placeholder="Input your email address">
                                </div>
                            </div>



                            <div class="form-group">
                                <input type="button" id="nxtSign" value="Signup Now" class="btn btn-primary">
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