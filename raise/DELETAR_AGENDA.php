<?php

include "config.php";
     
 $id         		 = $_POST['id_2'];

 $q=mysqli_query($con,"DELETE FROM agenda_usuario_perfil WHERE id=$id");
 $q2=mysqli_query($con,"DELETE FROM feed_usuarios WHERE id_feed=$id");

 if($q)
  echo "success";
 else
  echo "error";



?>