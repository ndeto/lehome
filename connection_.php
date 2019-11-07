<?php
ini_set("display_errors",0);
session_start();
$user = "zeroneco_le";
$password = "!jupiter1989000";
$host = "localhost";
$db = "zeroneco_erroll_db";

$connection = mysqli_connect($host,$user,$password,$db);
if ($connection  -> connect_errno) {
printf('Could not connect: %s \n ' ,$mysqli -> connect_error);
exit();
  }
?>
