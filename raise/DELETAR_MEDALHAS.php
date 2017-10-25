<?php

include "config.php";
     
 $id         		 = $_POST['id'];
 $colocacao        	 = $_POST['colocacao'];
 $email        		     = $_POST['email'];


if ($colocacao === "1") {
$tabela = 'ouro';
} elseif ($colocacao === "2") {
$tabela = 'prata';
} else {
$tabela = 'bronze';

}
 mysqli_query($con,"UPDATE `usuarios` SET `$tabela`= `$tabela` - 1 WHERE `email` = '$email'");

 $q=mysqli_query($con,"DELETE FROM medalhas_usuario_perfil WHERE id=$id");

 $q2=mysqli_query($con,"DELETE FROM feed_usuarios WHERE id_feed=$id");


 if($q)
  echo "success";
 else
  echo "error";



?>