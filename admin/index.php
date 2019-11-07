<?php
include '../connection.php';

if(!empty($_SESSION['member'])){

include 'header.php';
include 'menu.php';
 ?>


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Dashboard <small>Summary of your Website</small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">

                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <a style="text-decoration:none" href="blog_posts.php">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-cutlery fa-5x"></i>
                                <h3>
                                  <?php
                                  $sql5="select count(*) from special_menu";
                                  $result5=mysqli_query($connection,$sql5);
                                  if($result5){
                                    $row5 = mysqli_fetch_array($result5);
                                    $num_rows5 = $row5[0];
                                    echo $num_rows5;
                                  }
                                   ?>
                                </h3>
                            </div>
                            <div class="panel-footer back-footer-blue">
                                Menu Items

                            </div>
                        </div>
                      </a>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <a style="text-decoration:none" href="vlog_posts.php">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fa fa-users fa-5x"></i>
                                <h3>
                                  <?php
                                  $sql4="select count(*) from employees";
                                  $result4=mysqli_query($connection,$sql4);
                                  if($result4){
                                    $row4 = mysqli_fetch_array($result4);
                                    $num_rows4 = $row4[0];
                                    echo $num_rows4;
                                  }
                                   ?>
                                </h3>
                            </div>
                            <div class="panel-footer back-footer-brown">
                                Employees

                            </div>
                        </div>
                      </a>
                    </div>

                </div>


                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">

                      <div class="panel panel-default">
                          <div class="panel-heading">
                              Special Menu Items
                          </div>
                          <div class="panel-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>View</th>
                                            <th>Name</th>
                                            <th>Date Added</th>
                                            <th>Price</th>
                                            <th>Active</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $sql="select * from special_menu order by id desc limit 10 ";
                                      $result=mysqli_query($connection,$sql);
                                      if($result){
                                        while($row=$result->fetch_assoc()){
                                          $id=$row['id'];
                                          $name=$row['name'];
                                          $price=$row['price'];
                                          $description=$row['description'];
                                          $date=$row['date'];
                                          $active=$row['active'];
                                          ?>

                                          <tr>
                                              <td><a href="view_menu.php?id=<?php echo $id;?>"><i class="fa fa-search"></i> View/Edit</a></td>
                                              <td><?php echo $name;?></td>
                                              <td><?php echo $date;?></td>
                                              <td><?php echo $price;?></td>
                                              <td><?php echo $active;?></td>
                                              <td><a style="color:red" href="delete_menu.php?id=<?php echo $id;?>"><i class="fa fa-trash-o"></i> Delete</a></td>
                                          </tr>

                                      <?php
                                        }
                                      }
                                      ?>

                                    </tbody>
                                  </table>
                                  <a style="text-decoration:none" href="special_menu.php"><button class="btn btn-primary"><i class="fa fa-eye"></i> View All</button></a>
                              </div>
                          </div>
                      </div>

                  </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">

                      <div class="panel panel-default">
                          <div class="panel-heading">
                              Employees
                          </div>
                          <div class="panel-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered table-hover" id="dataTables-example2">
                                      <thead>
                                          <tr>
                                              <th>View</th>
                                              <th>Name</th>
                                              <th>Date Added</th>
                                              <th>Position</th>
                                              <th>Delete</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        $sql="select * from employees order by id desc limit 10";
                                        $result=mysqli_query($connection,$sql);
                                        if($result){
                                          while($row=$result->fetch_assoc()){
                                            $id=$row['id'];
                                            $title=$row['name'];
                                            $position=$row['position'];
                                            $author=$row['author'];
                                            $date=$row['date'];
                                            ?>

                                            <tr>
                                                <td><a href="view_blog.php?id=<?php echo $id;?>"><i class="fa fa-search"></i> View/Edit</a></td>
                                                <td><?php echo $title;?></td>
                                                <td><?php echo $date;?></td>
                                                <td><?php echo $position;?></td>
                                                <td><a style="color:red" href="delete_employee.php?id=<?php echo $id;?>"><i class="fa fa-trash-o"></i> Delete</a></td>
                                            </tr>

                                        <?php
                                          }
                                        }
                                        ?>

                                      </tbody>
                                  </table>
                                  <a style="text-decoration:none" href="employees.php"><button class="btn btn-primary"><i class="fa fa-eye"></i> View All</button></a>
                              </div>
                          </div>
                      </div>

                  </div>
                </div>
                <!-- /. ROW  -->
<?php
include 'footer.php';
}else{
  header("location:login.php");
}
 ?>
