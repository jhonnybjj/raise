<?php
include "config.php";

$email = $_GET['email'];

$data=array();
$q=mysqli_query($con,"select * from galeria_usuario_perfil WHERE email_usuario='$email'  ORDER BY id DESC");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data); 
?>