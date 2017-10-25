<?php




 include "config.php";  
 $usuario_entrar		= $_POST['usuario_entrar'];
 $senha_entrar	= $_POST['senha_entrar'];
 $q=mysqli_query($con,"SELECT * FROM usuarios WHERE email='$usuario_entrar' and senha='$senha_entrar'");  
if(mysqli_num_rows($q) <=0) {
echo 'error';
}else {
echo 'success';
}




?>