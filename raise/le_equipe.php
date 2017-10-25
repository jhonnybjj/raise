<?php
include "config.php";
$id = $_GET['id'];
$data=array();
$q=mysqli_query($con,"select * from equipe WHERE id='$id'");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>