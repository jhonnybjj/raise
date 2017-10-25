<?php

include "config.php";


$id_usuario                     = $_POST['id_usuario'];
$email_logado_principal         = $_POST['email_logado_principal'];


 $q=mysqli_query($con,"INSERT INTO agenda_usuario_perfil (atividade,esporte,como,hora_inicio,hora_fim,local,id_usuario,data,dias) VALUES ('$compromisso_ati','$modalidade_age','$como_age','$hora_inicio_age','$hora_fim_age','$local_age','$id','$inicio_atividade_age','$dias')");

 if($q)
  echo "success";
 else
  echo "error";



?>