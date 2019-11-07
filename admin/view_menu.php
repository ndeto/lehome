<?php
include '../connection.php';

$id=$_GET['id'];

if(!empty($_SESSION['member'])){

include 'header.php';
include 'menu.php';
 ?>
 <div class="row">
              <div class="col-md-12">
                  <h1 class="page-header">
                      View/Edit Menu Item
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
                    if(isset($_GET['update'])){
                      echo '<div style="text-align:center" class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Menu Item Updated Successfully</strong></div>';
                    }
                    ?>
                    <?php
                    $sql="select * from special_menu where id='$id'";
                    $result=mysqli_query($connection,$sql);
                    if($result){
                      while($row=$result->fetch_assoc()){
                        $id=$row['id'];
                        $title=$row['name'];
                        $description=$row['description'];
                        $photo=$row['photo'];
                        $active=$row['active'];
                        $category=$row['category'];
                      }
                    }
                    ?>
                    <div class="col-md-6">
                      <form action="update_menu.php" method="post"  enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="form-group">
                            <label>Name</label>
                            <input value="<?php echo $title; ?>" name="title" class="form-control" required placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Active</label>
                            <p><?php echo $active; ?></p><br/><br/>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category"  class="form-control" required>
                              <option value="<?php echo $category; ?>"><?php echo $category; ?></option>
                              <option value="Appetizers">Appetizers</option>
                              <option value="Main Course">Main Course</option>
                              <option value="Salads & More">Salads & More</option>
                              <option value="Desserts">Desserts</option>
                              <option value="Drinks & Cocktails">Drinks & Cocktails</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea rows="10" name="description" type="text" class="form-control" required placeholder="Description"><?php echo $description; ?></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Update Menu Item</button>
                          <button type="reset" class="btn btn-default">Reset Form</button>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-6">
                      <img class="col-md-12" src="../images/uploads/<?php echo $photo; ?>">
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
