 <?php
include("functions/top.php");
$username = $_SESSION['Username'];
$sql = "SELECT sum(`sn`) as ts FROM article WHERE `author` = '$username'";
$res = query($sql);
$row = mysqli_fetch_array($res);
 ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Articles <sup><span
                                class="badge badge-info right"><?php echo $row['ts']; ?></span></sup></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                        <li class="breadcrumb-item active">Articles</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- right column -->
          <div class="col-md-12">
              <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title"></h3>
               <div class="card-tools">
                  <button type="button" onclick="window.print();" id="prin" data-toggle="tooltip" title="Print Result" class="btn btn-tool"><i class="fas fa-edit"></i>
                  </button>
                  <button type="button" data-toggle="tooltip" title="Maximize" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-trash"></i>
                  </button>
                    <button type="button" data-toggle="tooltip" title="Minimize" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Article</th>
                  <th>Monthly View</th>
                  <th>Annual View</th>
                  <th>Date Posted</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
        
                <tr>
                   <?php
$author = $_SESSION['Username'];             
 $sql="SELECT * from `article` WHERE `author` = '$author'";
 $result_set = query($sql);
 while($row = mysqli_fetch_array($result_set))
 {
  if(row_count($result_set) == "") {

           echo  "<p style='color:red;'>No Record Found</p>";
            
          } else {
          ?>          
                  <td><?php echo $row['title']; ?></td>
                  <td><?php echo $row['view']; ?></td>
                  <td><?php echo $row['totview']; ?></td>
                  <td><?php echo date('D, M d, Y h:i:sa', strtotime($row['datepost'])) ; ?></td>
                  <td><a href="https://teensyouths.com.ng/<?php echo $row['post_url']; ?>">View article details</a></td>
                </td>
                </tr>
                 <?php
          } 
        }
          ?>
                </tbody>
             
              </table>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>


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
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>
<script src="ajax.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
$(function() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
});
</script>
  <script>
    //filter
    document.getElementById('chkres').addEventListener('click', getResult);

    function getResult()
    {
      var x = document.forms["printres"]["clss"].value;
      var y = document.forms["printres"]["ressbj"].value;
      if (y == null || y == "") {
    $(toastr.error('Please select a term'));
        return false;
    }
      var xhr = new  XMLHttpRequest();
      xhr.open('GET', './result?id='+x+'&other='+y, true);

      xhr.onload = function ()
      {
        if (xhr.status == 200) {
          //document.write(this.responseText);
          document.getElementById('displayres').innerHTML=xhr.responseText;
        } else {

          document.write('File not Found');
        }
      }

      xhr.send();
    }
  </script>

</body>

</html>