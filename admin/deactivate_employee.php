<?php
ini_set("display_errors", 0);
ini_set("error_reporting", 0);
include '../connection.php';
if(!empty($_SESSION['member'])){

$id = $_GET['id'];

$sql5="update employees set active='False' where id='$id'";
$result5 = mysqli_query($connection,$sql5);
if($result5){
   header("location: employees.php?disable=1");
}else{
  header("location: employees.php?error=1");
    }
}
?>
