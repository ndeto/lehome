<?php
include '../connection.php';

$email =  $_POST["email"];
$password =  $_POST["password"];

$email = stripslashes($email);
$password = stripslashes($password);

$email = mysqli_real_escape_string($connection,$email);
$password = mysqli_real_escape_string($connection,$password);


$sql = "select * from admin where password='$password' AND email='$email' AND active='True'";

$result = mysqli_query($connection,$sql,MYSQLI_USE_RESULT);

if ($row = $result ->  fetch_array(MYSQLI_ASSOC)){
  $_SESSION['member'] = $row["member"];
  $_SESSION['name'] = $row["name"];
  $_SESSION['email'] = $row["email"];
  $_SESSION['id'] = $row["id"];
    header("location: index.php");
 }
else{
  header("location: login.php?error=1");
 }

mysqli_close($connection); // Closing Connection

?>
