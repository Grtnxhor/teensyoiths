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

  <div class="col-md-6">
    <p style="width: 40%" class="col-md-6"><?php echo "<span class='col-md-6'>$description</span>"; ?>
    </p>
  </div>