<?php
include '../connection.php';

if(!empty($_SESSION['member'])){

include 'header.php';
include 'menu.php';
 ?>
 <div class="row">
              <div class="col-md-12">
                  <h1 class="page-header">
                      Administrators
                  </h1>
              </div>
          </div>
           <!-- /. ROW  -->

      <div class="row">
          <div class="col-md-12">
              <!-- Advanced Tables -->
              <div class="panel panel-default">

                  <div class="panel-body">
                    <?php
                    if(isset($_GET['error'])){
                            echo '<div style="text-align:center" class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry, there was an Error. Please try again</strong></div>';
                        }
                    if(isset($_GET['admin'])){
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Admin Added Successfully</strong></div>';
                    }
                    ?>
                      <div class="table-responsive">
                        <a href="add_admin.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Admin</a><br><br>
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example2">
                            <thead>
                                <tr>
                                    <th>Member Type</th>
                                    <th>Name</th>
                                    <th>Active(True/False)</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              $sql="select * from admin order by id asc";
                              $result=mysqli_query($connection,$sql);
                              if($result){
                                while($row=$result->fetch_assoc()){
                                  $id=$row['id'];
                                  $member=$row['member'];
                                  $name=$row['name'];
                                  $active=$row['active'];
                                  ?>

                                  <tr>
                                      <td><?php echo $member;?></td>
                                      <td><?php echo $name;?></td>
                                      <td><?php echo $active;?></td>
                                  </tr>

                              <?php
                                }
                              }
                              ?>

                            </tbody>
                        </table>
                      </div>

                  </div>
              </div>
              <!--End Advanced Tables -->
          </div>
      </div>
          <!-- /. ROW  -->
<?php
include 'footer.php';
}else{
  header("location:login.php");
}
 ?>
