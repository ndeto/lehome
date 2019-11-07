<?php
ini_set("display_errors", 0);
ini_set("error_reporting", 0);
include '../connection.php';
if(!empty($_SESSION['member'])){

$id = $_GET['id'];

$sql5="update special_menu set active='True' where id='$id'";
$result5 = mysqli_query($connection,$sql5);
if($result5){
   header("location: special_menu.php?enable=1");
}else{
  header("location: special_menu.php?error=1");
    }
}
?>
