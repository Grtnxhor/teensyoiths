<html>
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <link rel="icon" href="../images/2.png" type="image/ico" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="summernote"></div>
    </div>
    <div class="col-xs-12 text-right">
      <span id="maxContentPost"></span>
    </div>
  </div>
</div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  function registerSummernote(element, placeholder, max, callbackMax) {
    $(element).summernote({
      toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']]
      ],
      placeholder,
      callbacks: {
        onKeydown: function(e) {
          var t = e.currentTarget.innerText;
          if (t.length >= max) {
            //delete key
            if (e.keyCode != 8)
              e.preventDefault();
            // add other keys ...
          }
        },
        onKeyup: function(e) {
          var t = e.currentTarget.innerText;
          if (typeof callbackMax == 'function') {
            callbackMax(max - t.length);
          }
        },
        onPaste: function(e) {
          var t = e.currentTarget.innerText;
          var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
          e.preventDefault();
          var all = t + bufferText;
          document.execCommand('insertText', false, all.trim().substring(0, 100));
          if (typeof callbackMax == 'function') {
            callbackMax(max - t.length);
          }
        }
      }
    });
  }


$(function(){
  registerSummernote('.summernote', 'Leave a comment', 100, function(max) {
    $('#maxContentPost').text(max)
  });
});
</script>
</html>