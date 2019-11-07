<?php
include '../connection.php';

if(!empty($_SESSION['member'])){

include 'header.php';
include 'menu.php';
 ?>
 <div class="row">
              <div class="col-md-12">
                  <h1 class="page-header">
                      Special Menu Items
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
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Menu Item Deleted Successfully</strong></div>';
                        }
                    if(isset($_GET['menu'])){
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Menu Item Added Successfully</strong></div>';
                    }
                    if(isset($_GET['disable'])){
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Menu Item Deactivated Successfully</strong></div>';
                    }
                    if(isset($_GET['enable'])){
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Menu Item Activated Successfully</strong></div>';
                    }
                    ?>
                      <div class="table-responsive">
                        <a href="add_menu_item.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Menu Item</a><br><br>
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                          <thead>
                              <tr>
                                  <th>View</th>
                                  <th>Name</th>
                                  <th>Date Added</th>
                                  <th>Price</th>
                                  <th>Active</th>
                                  <th>Category</th>
                                  <th>Activate</th>
                                  <th>Deactivate</th>
                                  <th>Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php
                            $sql="select * from special_menu order by id desc";
                            $result=mysqli_query($connection,$sql);
                            if($result){
                              while($row=$result->fetch_assoc()){
                                $id=$row['id'];
                                $name=$row['name'];
                                $price=$row['price'];
                                $description=$row['description'];
                                $date=$row['date'];
                                $active=$row['active'];
                                $category=$row['category'];
                                ?>

                                <tr>
                                    <td><a href="view_menu.php?id=<?php echo $id;?>"><i class="fa fa-search"></i> View/Edit</a></td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $date;?></td>
                                    <td><?php echo $price;?></td>
                                    <td><?php echo $active;?></td>
                                    <td><?php echo $category;?></td>
                                    <td><a style="color:green" href="activate_menu.php?id=<?php echo $id;?>"><i class="fa fa-check"></i> Activate</a></td>
                                    <td><a style="color:orange" href="deactivate_menu.php?id=<?php echo $id;?>"><i class="fa fa-times"></i> Deactivate</a></td>
                                    <td><a style="color:red" href="delete_menu.php?id=<?php echo $id;?>"><i class="fa fa-trash-o"></i> Delete</a></td>
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
