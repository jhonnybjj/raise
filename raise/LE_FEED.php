<?php
include "config.php";
$id_usuario = $_GET['id_usuario'];
$data=array();
$q=mysqli_query($con,"SELECT `feed_usuarios`.*, `usuarios`.`nome`,`usuarios`.`sobrenome`,`usuarios`.`avatar` FROM `feed_usuarios` INNER JOIN `usuarios` ON `feed_usuarios`.`email_usuario` = `usuarios`.`id` WHERE `feed_usuarios`.`email_usuario`='$id_usuario' ORDER BY id DESC");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>