<?php
include '../connection.php';

if(!empty($_SESSION['member'])){

include 'header.php';
include 'menu.php';
 ?>
 <div class="row">
              <div class="col-md-12">
                  <h1 class="page-header">
                      Employees of the Month
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
                    if(isset($_GET['delete'])){
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Employee Deleted Successfully</strong></div>';
                        }
                    if(isset($_GET['employee'])){
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Employee Added Successfully</strong></div>';
                    }
                    if(isset($_GET['disable'])){
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Employee Deactivated Successfully</strong></div>';
                    }
                    if(isset($_GET['enable'])){
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Employee Activated Successfully</strong></div>';
                    }
                    ?>
                      <div class="table-responsive">
                        <a href="add_employee.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Employee</a><br><br>
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example2">
                            <thead>
                                <tr>
                                    <th>View</th>
                                    <th>Name</th>
                                    <th>Date Added</th>
                                    <th>Position</th>
                                    <th>Active</th>
                                    <th>Activate</th>
                                    <th>Deactivate</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              $sql="select * from employees order by id desc";
                              $result=mysqli_query($connection,$sql);
                              if($result){
                                while($row=$result->fetch_assoc()){
                                  $id=$row['id'];
                                  $title=$row['name'];
                                  $position=$row['position'];
                                  $author=$row['author'];
                                  $date=$row['date'];
                                  $active=$row['active'];
                                  ?>

                                  <tr>
                                      <td><a href="view_employee.php?id=<?php echo $id;?>"><i class="fa fa-search"></i> View/Edit</a></td>
                                      <td><?php echo $title;?></td>
                                      <td><?php echo $date;?></td>
                                      <td><?php echo $position;?></td>
                                      <td><?php echo $active;?></td>
                                      <td><a style="color:green" href="activate_employee.php?id=<?php echo $id;?>"><i class="fa fa-trash-o"></i> Activate</a></td>
                                      <td><a style="color:orange" href="deactivate_employee.php?id=<?php echo $id;?>"><i class="fa fa-trash-o"></i> Deactivate</a></td>
                                      <td><a style="color:red" href="delete_employee.php?id=<?php echo $id;?>"><i class="fa fa-trash-o"></i> Delete</a></td>
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
