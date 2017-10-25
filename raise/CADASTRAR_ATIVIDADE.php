<?php

include "config.php";

$dias         = $_POST['dias'];

 $atividade_ati         = $_POST['atividade_ati'];
 $modalidade         = $_POST['modalidade'];
 $como           	 = $_POST['como'];
 $hora_inicio        = $_POST['hora_inicio'];
 $hora_fim           = $_POST['hora_fim'];
 $local     		 = $_POST['local'];
 $id         		 = $_GET['id'];

 $data         		 = date('d/m/Y');



              
switch ($modalidade) {
	case "1":
		$esporte = "NATACAO";
		break;
	case "2":
		$esporte = "CORRIDA";
		break;
	case "3":
		$esporte = "ACADEMIA";
		break;
	case "4":
		$esporte = "CROSS FIT";
		break;
	case "5":
		$esporte = "BICICLETA";
		break;
	case "6":
		$esporte = "FUTEBOL";
		break;
	case "7":
		$esporte = "SURF";
		break;
	case "8":
		$esporte = "SKATE";
		break;
	case "9":
		$esporte = "DESCANSO";
		break;
	default:
		$esporte = "OUTROS";
}   



 $q=mysqli_query($con,"INSERT INTO atividades_usuario_perfil (atividade,esporte,como,hora_inicio,hora_fim,local,id_usuario,data,dias) VALUES ('$atividade_ati','$modalidade','$como','$hora_inicio','$hora_fim','$local','$id','$data','$dias')");



$q4=mysqli_query($con,"SELECT max(id) FROM atividades_usuario_perfil WHERE id_usuario='$id'");
$row=mysqli_fetch_row($q4);
$id_feed=$row['0'];

 $q3=mysqli_query($con,"INSERT INTO feed_usuarios (email_usuario,categoria,id_feed,atividade,modalidade,como,hr_inicio,hr_fim,dias) VALUES ('$id','Atividade','$id_feed','$atividade_ati','$esporte','$como','$hora_inicio','$hora_fim','$dias')");






 if($q)
  echo "success";
 else
  echo "error";



?>