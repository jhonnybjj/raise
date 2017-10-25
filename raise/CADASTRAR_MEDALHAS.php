<?php

include "config.php";

$email         = $_GET['email'];
$id            = $_GET['id'];

$titulo          = $_POST['titulo'];
 $colocacao          = $_POST['colocacao'];
 $categoria          = $_POST['categoria'];
 $peso           	 = $_POST['peso'];
 $descricao          = $_POST['descricao'];
 $data               = $_POST['data'];


if ($colocacao === "1") {
$tabela = 'ouro';
} elseif ($colocacao === "2") {
$tabela = 'prata';
} else {
$tabela = 'bronze';

}

  
 mysqli_query($con,"UPDATE `usuarios` SET `$tabela`= `$tabela` + 1 WHERE `email` = '$email'");
                 
                  
                  
 $q=mysqli_query($con,"INSERT INTO medalhas_usuario_perfil (categoria,peso,data_medalha,descricao,colocacao,email_usuario,titulo) VALUES ('$categoria','$peso','$data','$descricao','$colocacao','$email','$titulo')");



$q4=mysqli_query($con,"SELECT max(id) FROM medalhas_usuario_perfil WHERE email_usuario='$email'");
$row=mysqli_fetch_row($q4);
$id_feed=$row['0'];

 $q3=mysqli_query($con,"INSERT INTO feed_usuarios (email_usuario,categoria,id_feed,atividade,modalidade,como,hr_inicio,hr_fim,dias) VALUES ('$id','Medalhas','$id_feed','$titulo','$tabela','$categoria','$peso','$descricao','$data')");






 if($q)
  echo "success";
 else
  echo "error";



?>