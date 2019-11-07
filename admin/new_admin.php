<?php
include '../connection.php';
if(!empty($_SESSION['member'])){

  date_default_timezone_set("Africa/Nairobi");

  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $name=  stripslashes($name);
  $email=  stripslashes($email);
  $password=  stripslashes($password);

  $name=  mysqli_real_escape_string($connection,$name);
  $answer=  mysqli_real_escape_string($connection,$answer);
  $password=  mysqli_real_escape_string($connection,$password);

  $sql="insert into admin (`member`,`name`,`email`,`password`,`active`) values ('Admin','$name','$email','$password','True')";
  $result=  mysqli_query($connection, $sql, MYSQLI_STORE_RESULT);
  if($result){
    header("location:admins.php?admin=1");
  }else{
    header("location:admins.php?error=1");
  }
}
?>
