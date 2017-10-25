<?php
include "config.php";
$id_usuario = $_GET['id_usuario'];
$data=array();
$q=mysqli_query($con,"select * from medalhas WHERE id_usuario='$id_usuario'");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>