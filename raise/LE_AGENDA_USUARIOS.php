<?php
include "config.php";
$id_usuario = $_GET['id_usuario'];
$data=array();
$q=mysqli_query($con,"select * from agenda_usuario_perfil WHERE id_usuario='$id_usuario' ORDER BY id DESC");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>