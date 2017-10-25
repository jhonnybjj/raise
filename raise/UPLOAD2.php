<?php 

include "config.php";

$email = $_GET['email'];


 print_r($_FILES);
   $new_image_name = ".jpg";
   move_uploaded_file($_FILES["file"]["tmp_name"], "./avatar/$email".$new_image_name);

?>