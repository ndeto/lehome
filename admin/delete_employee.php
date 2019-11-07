<?php
ini_set("display_errors", 0);
ini_set("error_reporting", 0);
include '../connection.php';
if(!empty($_SESSION['member'])){
$id = $_GET['id'];
$sql="select name,photo from employees where id=$id";
$result = mysqli_query($connection,$sql);
if($result){
  while($row=$result->fetch_assoc()){
  $title=$row['name'];
  $photo=$row['photo'];
  }
  unlink("../images/uploads/".$photo);
}
$sql="delete from employees where id=$id";
$result = mysqli_query($connection,$sql);
if($result){
   header("location: employees.php?delete=1");
}else{
  header("location: employees.php?error=1");
    }
}
?>
