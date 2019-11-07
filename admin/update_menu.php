<?php
include '../connection.php';
if(!empty($_SESSION['member'])){

  date_default_timezone_set("Africa/Nairobi");
  $id=$_POST['id'];

  $title=$_POST['title'];
  $description=$_POST['description'];
  $category=$_POST['category'];

  $title=  stripslashes($title);
  $description=  stripslashes($description);

  $title=  mysqli_real_escape_string($connection,$title);
  $description=  mysqli_real_escape_string($connection,$description);

  $sql="update special_menu set name='$title',description='$description',category='$category' where id='$id'";
  $result=  mysqli_query($connection, $sql, MYSQLI_STORE_RESULT);
  if($result){
    header("location:view_menu.php?id=".$id."&update=1");
  }else{
    header("location:view_menu.php?id=".$id."&error=1");
  }
}
?>
