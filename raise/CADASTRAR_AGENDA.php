<?php

include "config.php";

$dias         = $_POST['dias'];
$compromisso_ati         = $_POST['compromisso_ati'];
$inicio_atividade_age         = $_POST['inicio_atividade_age'];
$modalidade_agenda         = $_POST['modalidade_agenda'];
 $como_age           	 = $_POST['como_age'];
 $hora_inicio_age        = $_POST['hora_inicio_age'];
 $hora_fim_age           = $_POST['hora_fim_age'];
 $local_age     		 = $_POST['local_age'];
 $id         		 = $_GET['id'];



              
switch ($modalidade_agenda) {
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


 $q=mysqli_query($con,"INSERT INTO agenda_usuario_perfil (atividade,esporte,como,hora_inicio,hora_fim,local,id_usuario,data,dias) VALUES ('$compromisso_ati','$modalidade_agenda','$como_age','$hora_inicio_age','$hora_fim_age','$local_age','$id','$inicio_atividade_age','$dias')");


$q4=mysqli_query($con,"SELECT max(id) FROM agenda_usuario_perfil WHERE id_usuario='$id'");
$row=mysqli_fetch_row($q4);
$id_feed=$row['0'];
 $q3=mysqli_query($con,"INSERT INTO feed_usuarios (email_usuario,categoria,id_feed,atividade,modalidade,como,hr_inicio,hr_fim,dias) VALUES ('$id','Agenda','$id_feed','$compromisso_ati','$esporte','$como_age','$hora_inicio_age','$hora_fim_age','$inicio_atividade_age')");



 if($q)
  echo "success";
 else
  echo "error";



?>