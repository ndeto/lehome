<?php
include '../connection.php';
if(!empty($_SESSION['member'])){

  date_default_timezone_set("Africa/Nairobi");

  $title=$_POST['name'];
  $date=date("d-F-Y");
  $time=date("h:i:sa");
  $author=$_SESSION['name'];
  $unique2=uniqid();
  $unique3=uniqid();
  $unique4=uniqid().uniqid();

  $title=  stripslashes($title);
  $author=  stripslashes($author);

  $title=  mysqli_real_escape_string($connection,$title);
  $author=  mysqli_real_escape_string($connection,$author);

  $sql="insert into gallery (`name`,`date`,`author`,unique_id) values ('$title','$date','$author','$unique4')";
  $result=  mysqli_query($connection, $sql, MYSQLI_STORE_RESULT);
  if($result){

        if($_FILES['photo']['size'] != 0){
            $errors= array();
            $file_name = $_FILES['photo']['name'];
            $file_size =$_FILES['photo']['size'];
            $file_tmp =$_FILES['photo']['tmp_name'];
            $file_type=$_FILES['photo']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['photo']['name'])));
            $expensions= array("jpeg","jpg","png");

            $photo=$unique3.".".$file_ext;

            if(in_array($file_ext,$expensions)=== false){
               header ("location: add_photo.php?extension=1");
            }

            elseif($file_size > 3000000){
               header ("location: add_photo.php?size=1");
            }

            elseif(empty($errors)==true){
               move_uploaded_file($file_tmp,"../images/uploads/".$photo);
               $sql="update `gallery` set photo='$photo' where unique_id='$unique4'";
               $result = mysqli_query($connection,$sql,MYSQLI_STORE_RESULT);
               if($result){
                header ("location: gallery.php?photo=1");
            }  else {
                header ("location: add_photo.php?error=1");
            }
            }else{
               print_r($errors);
            }
          }else{
            header('location: add_photo.php?error=1');
          }
  }else{header('location: add_photo.php?error=1');}
}
?>
