<?php
include "config.php";

$email = $_POST['email'];
$q=mysqli_query($con,"SELECT * FROM usuarios WHERE email='$email'");  
if(mysqli_num_rows($q) <=0) {
echo 'error';
}else {
echo 'success';
}

?>