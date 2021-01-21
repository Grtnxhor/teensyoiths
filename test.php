<?php
include("functions/init.php");
	
	 
   
$a_date = date("d-m-Y");
echo date("t-m-Y", strtotime($a_date));



//t returns the number of days in the month of a given date

$a_date = "2009-11-23";
echo date("Y-m-t", strtotime($a_date));

?>

<!-- Display the countdown timer in an element -->
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>




<?php
session_start();
date_default_timezone_set('Africa/Lagos');
if(!isset($_SESSION['expire'])){
      $_SESSION['expire'] = time()+3600;
}
$time_remaining = $_SESSION['expire'] - time();
echo round(abs($time_remaining) / 60, 2) . ' minutes to go ...';