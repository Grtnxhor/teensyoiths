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
                  <button type="button" id="edit" data-toggle="modal" data-target="#modal-edit"
                            data-toggle="tooltip" title="Edit a question" class="btn btn-tool"><i class="fas fa-edit"></i>
                  </button>
                  <button type="button"  id="del" data-toggle="modal" data-target="#modal-delete"
                            data-toggle="tooltip" title="Delete a question" class="btn btn-tool"><i class="fas fa-trash"></i>
                  </button>
                    <button type="button" data-toggle="tooltip" title="Minimize" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-responsive table-striped">
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

<!---modal delete--->
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Delete an Article <span id="msg"></span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <p class="text-grey">Kindly confirm the article you want to delete by selecting from the list of articles below</p>

                    <form name="deleting">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Article</span>
                            </div>
                             <select name="delsn" id="delsn" class="form-control">
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
                                <option name="delsn" id="delsn"><?php echo $row['post_url'] ?></option>
                                <?php
                              }
                            }
                                ?>
                            </select>
      
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="button" id="movedel" class="btn btn-outline-light">Continue</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog" role="document">
        <div style="background: #f9f9ff; color: #ff0000;" class="modal-content">
            <div class="modal-body">
                <div id="msg" class="text-center"></div>
            </div>
        </div>
    </div>
</div>



<!---modal delete--->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h4 class="modal-title">Edit an Article <span id="msg"></span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <p class="text-grey">Kindly confirm the article you wish to edit by selecting from the list of articles below</p>

                    <form name="deleting">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Article</span>
                            </div>
                             <select name="eddelsn" id="eddelsn" class="form-control">
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
                                <option name="eddelsn" id="delsn"><?php echo $row['post_url'] ?></option>
                                <?php
                              }
                            }
                                ?>
                            </select>
      
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="button" id="edmovedel" class="btn btn-outline-light">Continue</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
<script src="../ajax.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>

</body>

</html>