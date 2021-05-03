<?php
include("init.php");
include("includes/header.php");

//get the last day in a month
    $a_date = date("M d, Y");
    $tot = date("M t, Y", strtotime($a_date));


//get the last day of that month when uploading article in the db
$sql = "SELECT * FROM article";
$res = query($sql);
if(row_count($res) != '') {
while($row = mysqli_fetch_array($res)) {
        
        //get the last day here
        $abs = date('M d, Y', strtotime($row['lastdate']));

        //on load, check if the present date is greater than the last day gotten
        if ($a_date >= $abs) {

        //get constants
        $view    = $row['view'];
        $totview = $row['view'] + $row['totview'];

        //if true, update monthly and annual view, and update the next last day
        $ssl = "UPDATE article SET `view` = '0', `totview` = '$tot', `lastdate` = '$tot'";
        $r   = query($ssl);
               
        }
} //else do nothing
}
?>