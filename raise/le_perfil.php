<?php
include "config.php";
$email = $_GET['email'];
$data=array();
$q=mysqli_query($con,"select id,nome,email,usuario,raises,modalidade,graduacao,inicio_atividade,sobrenome,avatar,seguidores,ouro,prata,bronze,equipe from usuarios WHERE email='$email'");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>