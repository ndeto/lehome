<?php
include '../connection.php';

if(!empty($_SESSION['member'])){

include 'header.php';
include 'menu.php';
 ?>
 <div class="row">
              <div class="col-md-12">
                  <h1 class="page-header">
                      Add Menu Item
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
                    if(isset($_GET['extension'])){
                      echo '<div style="text-align:center" class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>One or both the files has a wrong extention</strong></div>';
                    }
                    if(isset($_GET['size'])){
                      echo '<div style="text-align:center" class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>One or both the files is bigger than 3MB</strong></div>';
                    }
                    ?>
                    <form action="new_menu_item.php" method="post"  enctype="multipart/form-data">
                      <div class="form-group">
                          <label>Name</label>
                          <input name="name" class="form-control" required placeholder="Name">
                      </div>
                      <div class="form-group">
                          <label>Price</label>
                          <input name="price" type="number" class="form-control" required placeholder="Price">
                      </div>
                      <div class="form-group">
                          <label>Category</label>
                          <select name="category"  class="form-control" required>
                            <option value="">--Select a Category--</option>
                            <option value="Appetizers">Appetizers</option>
                            <option value="Main Course">Main Course</option>
                            <option value="Salads & More">Salads & More</option>
                            <option value="Desserts">Desserts</option>
                            <option value="Drinks & Cocktails">Drinks & Cocktails</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label>Description</label>
                          <textarea rows="10" name="description" type="text" class="form-control" required placeholder="Description"></textarea>
                      </div>
                      <div class="form-group">
                          <label>Photo</label>
                          <input name="photo" type="file" class="form-control" required placeholder="Image">
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Menu Item</button>
                        <button type="reset" class="btn btn-default">Reset Form</button>
                      </div>
                    </form>
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
