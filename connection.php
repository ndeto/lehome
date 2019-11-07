<?php
ini_set("display_errors",0);
session_start();
$user = "root";
$password = "spiderpig";
$host = "localhost";
$db = "erroll_db";

$connection = mysqli_connect($host,$user,$password,$db);
if ($connection  -> connect_errno) {
printf('Could not connect: %s \n ' ,$mysqli -> connect_error);
exit();
  }
?>
