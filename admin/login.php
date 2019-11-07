<?php
ini_set("error_reporting",0);
ini_set("display_errors",0);
include '../connection.php';
if(empty($_SESSION['member'])){
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>The Lord Erroll - Admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>
<body>

<div class="container">

<div class="page-header" style="text-align:center;margin-top:3em">
    <h1>Admin Login</h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
          <div class="col-md-12">
              <?php if(isset($_GET['error'])){ ?>
              <div class="alert alert-danger">
                  <p style="text-align:center;padding-top:0px" ><span class="glyphicon glyphicon-remove"></span><strong> Incorrect Username and/or Password.</strong></p>
              </div>
              <?php } ?>
          </div>
      </div>
        <form role="form" action="authenticate.php" method="post">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="email" id="InputName" placeholder="Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <br><br>
                <style>
                .btn,.btn-info{
                  color: #daa520;
                  background: #000;
                  border-color: #000;
                  transition: all 0.5s;
                }

                  .btn:hover,.btn-info:hover{
                    color: #000;
                    background: #daa520;
                    border-color: #daa520;
                  }
                </style>
                <input style="font-size:20px;width:100%" type="submit" name="submit" id="submit" value="Login" class="btn btn-info">
            </div>
        </form>
        <div class="col-lg-12" style="margin-top:5em"><div>
    </div>
</div>
<!-- Registration form - END -->

</div>

</body>
</html>
<?php }else{
  header("location:index.php");
}?>
