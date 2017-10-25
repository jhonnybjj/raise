<?php 

include "config.php";

$email = $_GET['email'];

$aleatorio = rand(99999, 999999999999); 

 print_r($_FILES);
   $new_image_name = ".jpg";
   move_uploaded_file($_FILES["file"]["tmp_name"], "./galeria/$aleatorio".$new_image_name);

 $q=mysqli_query($con,"INSERT INTO galeria_usuario_perfil (imagem,email_usuario) VALUES ('$aleatorio$new_image_name','$email')");

?>