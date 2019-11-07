<?php
include '../connection.php';

if(!empty($_SESSION['member'])){

include 'header.php';
include 'menu.php';
 ?>
 <div class="row">
              <div class="col-md-12">
                  <h1 class="page-header">
                      Gallery
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
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Photo Deleted Successfully</strong></div>';
                        }
                    if(isset($_GET['photo'])){
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Photo Added Successfully</strong></div>';
                    }
                    ?>
                      <div class="table-responsive">
                        <a href="add_photo.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Photo</a><br><br>
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example2">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date Added</th>
                                    <th>Photo</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              $sql="select * from gallery order by id desc";
                              $result=mysqli_query($connection,$sql);
                              if($result){
                                while($row=$result->fetch_assoc()){
                                  $id=$row['id'];
                                  $title=$row['name'];
                                  $date=$row['date'];
                                  $photo=$row['photo'];

                                  ?>

                                  <tr>
                                      <td><?php echo $title;?></td>
                                      <td><?php echo $date;?></td>
                                      <td><img src="../images/uploads/<?php echo $photo;?>" style="height:10em;"></td>
                                      <td><a style="color:red" href="delete_photo.php?id=<?php echo $id;?>"><i class="fa fa-trash-o"></i> Delete</a></td>
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
