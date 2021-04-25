<?php
include("../functions/init.php");

if(!isset($_SESSION['user']) && !isset($_SESSION['Username'])) {  

redirect("../signin");

} else {
$email = $_SESSION['user'];

//check if profile picture exit
$ssl = "SELECT * FROM user WHERE `email` = '$email'";
$rsl = query($ssl);

$rowed = mysqli_fetch_array($rsl);
if($rowed['propix'] == ''){
 redirect("./uploadpix");
} else {

include("include/sidebar.php"); 
}
}
?>

<!-- Modal -->
<div class="modal fade" id="ModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">

    </div>
</div>