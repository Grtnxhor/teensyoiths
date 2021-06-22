<?php
include("functions/top.php");

//get the last day in a month
$a_date = date("d-m-Y");
$tot = date("M t, Y", strtotime($a_date));
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Welcome <b><?php echo $_SESSION['Username'] ?></b></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fa fa-edit"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Written Articles</span>
                            <?php
 $username = $_SESSION['Username'];             
 $sql="SELECT SUM(sn) AS total from article WHERE `author` = '$username'";
 $result_set = query($sql);
 $row= mysqli_fetch_array($result_set);
 
         ?>
                            <span class="info-box-number"><?php echo number_format($row['total']); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- ./col -->
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="fas fa-eye"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Your Most Read Article</span>
                            <?php
                 
 $sql="SELECT * from article WHERE view BETWEEN 1 AND 1000000000000000 ORDER BY view desc LIMIT 1";
 $result_set=query($sql);
 $row2= mysqli_fetch_array($result_set);

 if(row_count($result_set) == '') {
    $row2['title'] = 'NULL';
 } 
         ?>
                            <span class="info-box-number"><?php echo $row2['title']; ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- TABLE: LATEST ORDERS -->

            <!-- /.row -->
            <!-- Main row -->
            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0"> <b>Write a New Article </b></h5>
                                </div>
                                <div class="card-body">


                                    <a href="./write" class="btn btn-primary">Begin Writing</a>
                                </div>
                            </div>


                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title m-0"><b>My Articles </b></h5>
                                </div>
                                <div class="card-body">
                                    <a href="./article" class="btn btn-primary">View Your Articles</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include("include/footer.php"); ?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>

<!-- Display the countdown timer in an element -->
<!--<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $tot ?>").getTime();

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
    document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
        minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>--->
</body>

</html>