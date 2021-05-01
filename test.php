	<?php
	include("include/header.php");
  $description = $_SESSION['det'];

 /* function myTruncate($string, $limit, $break=".", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  // is $break present between $limit and the end of the string?
  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  }

  return $string;
}


$shortdesc = myTruncate($description, 200);
  echo "<p>$shortdesc</p>";)*/
  ?>
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
          document.execCommand('insertText', false, all.trim().substring(0, 400));
          if (typeof callbackMax == 'function') {
            callbackMax(max - t.length);
          }
        }
      }
    });
  }


$(function(){
  registerSummernote('.summernote', 'Leave a comment', 400, function(max) {
    $('#maxContentPost').text(max)
  });
});
</script>