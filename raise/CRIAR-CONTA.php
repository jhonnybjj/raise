<?php

include "config.php";
     
 $nome            = $_POST['nome'];
 $sobrenome            = $_POST['sobrenome'];
 $email           = $_POST['email'];
 //$usuario         = $_POST['usuario'];
 $senha           = $_POST['senha'];
 $modalidade      = $_POST['modalidade'];
 $graduacao       = $_POST['graduacao'];
 $inicio_atividade      = $_POST['inicio_atividade'];


 $q=mysqli_query($con,"INSERT INTO usuarios (nome,email,senha,modalidade,graduacao,inicio_atividade, sobrenome, seguidores,avatar,ouro,prata,bronze,equipe) VALUES ('$nome','$email','$senha','$modalidade','$graduacao','$inicio_atividade','$sobrenome','0','http://hostplasma.com.br/raise/avatar/$email.jpg','0','0','0','')");

/*
$q2=mysqli_query($con,"select * from usuarios WHERE email='$email'");
$row2=mysqli_fetch_array($q2);
$id = $row2['id'];



 $q3=mysqli_query($con,"INSERT INTO medalhas (ouro,prata,bronze,id_usuario) VALUES ('0','0','0','$id')");
*/
 if($q)
  echo "success";
 else
  echo "error";



?>