<?php
include("functions/init.php");
if(!isset($_GET['id']) && !isset($_GET['other'])) {

} else {
$data =  $_GET['id'];
$other = $_GET['other'];
?>
        
          <!-- right column -->
          <div class="col-md-12">
              <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title"><?php echo strtoupper($data); ?> -  Fees Record</h3>
               <div class="card-tools">
                  <button type="button" onclick="window.print();" id="prin" data-toggle="tooltip" title="Print Result" class="btn btn-tool"><i class="fas fa-print"></i>
                  </button>
                  <button type="button" data-toggle="tooltip" title="Maximize" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                  </button>
                    <button type="button" data-toggle="tooltip" title="Minimize" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Class</th>
                  <th>School Fee</th>
                  <th>Total Paid</th>
                  <th>Outstanding</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
        
                <tr>
                   <?php
                 
 $sql="SELECT * from `student` WHERE `class` = '$data' AND `term` = '$other' AND ";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  if(row_count($result_set) == "") {

           echo  "<p style='color:red;'>No Record Found</p>";
            
          } else {
          ?>          
                  <td><?php echo $row['stud_id']; ?></td>
                  <td><?php echo $row['names']; ?></td>
                  <td><?php echo $row['score']; ?></td>
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
        <?php
      }
      ?>

        <script type="text/javascript"> 
  document.getElementById('prin').addEventListener('click', myfun);

  function myfun() {
     window.print();
  }
</script>
   