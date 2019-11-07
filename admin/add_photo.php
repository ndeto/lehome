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
                    <form action="new_photo.php" method="post"  enctype="multipart/form-data">
                      <div class="form-group">
                          <label>Name</label>
                          <input name="name" class="form-control" required placeholder="Name">
                      </div>
                      <div class="form-group">
                          <label>Photo</label>
                          <input name="photo" type="file" class="form-control" required placeholder="Image">
                      </div>

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Photo</button>
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
