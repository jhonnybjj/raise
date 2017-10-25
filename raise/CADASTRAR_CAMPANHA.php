<?php

include "config.php";

$email         = $_GET['email'];
$id            = $_GET['id'];

 $titulo_cp                  = $_POST['titulo_cp'];
 $valor_campanha_cp          = $_POST['valor_campanha_cp'];
 $data_inicio_cp           	 = $_POST['data_inicio_cp'];
 $data_termino_cp            = $_POST['data_termino_cp'];
 $descricao_cp               = $_POST['descricao_cp'];

                       
 $q=mysqli_query($con,"INSERT INTO campanha_usuario_perfil (email_usuario,titulo,valor,inicio,fim,descricao,valor_arecadado) VALUES ('$email','$titulo_cp','$valor_campanha_cp','$data_inicio_cp
','$data_termino_cp','$descricao_cp','0')");




$q4=mysqli_query($con,"SELECT max(id) FROM campanha_usuario_perfil WHERE email_usuario='$email'");
$row=mysqli_fetch_row($q4);
$id_feed=$row['0'];

 $q3=mysqli_query($con,"INSERT INTO feed_usuarios (email_usuario,categoria,id_feed,atividade,modalidade,como,hr_inicio,hr_fim,dias) VALUES ('$id','Campanha','$id_feed','$titulo_cp','$titulo_cp','$valor_campanha_cp','$data_inicio_cp','$data_termino_cp','$descricao_cp')");






 if($q)
  echo "success";
 else
  echo "error";



?>