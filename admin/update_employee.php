<?php
include '../connection.php';
if(!empty($_SESSION['member'])){

  date_default_timezone_set("Africa/Nairobi");
  $id=$_POST['id'];

  $title=$_POST['title'];
  $position=$_POST['position'];

  $title=  stripslashes($title);
  $position=  stripslashes($position);

  $title=  mysqli_real_escape_string($connection,$title);
  $position=  mysqli_real_escape_string($connection,$position);

  $sql="update employees set name='$title',position='$position' where id='$id'";
  $result=  mysqli_query($connection, $sql, MYSQLI_STORE_RESULT);
  if($result){
    header("location:view_employee.php?id=".$id."&update=1");
  }else{
    header("location:view_employee.php?id=".$id."&error=1");
  }
}
?>
