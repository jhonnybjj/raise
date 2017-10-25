<?php

include "config.php";

$email         = $_GET['email'];
$id            = $_GET['id'];

$nome_equipe          = $_POST['nome_equipe'];
$estados          = $_POST['estados'];
$modalidade_equipe          = $_POST['modalidade_equipe'];
$cidades           	 = $_POST['cidades'];

                  
                  
 $q=mysqli_query($con,"INSERT INTO equipe (avatar,nome,filiais,alunos,professores,seguidores,ouro,prata,bronze,cidade,estado,id_usuario_master,modalidade) VALUES ('$categoria','$nome_equipe','0','0','0','0','0','0','0','$cidades','$estados','$id','$modalidade_equipe')");



$q4=mysqli_query($con,"SELECT max(id) FROM equipe WHERE id_usuario_master='$id'");
$row=mysqli_fetch_row($q4);
$id_feed=$row['0'];


mysqli_query($con,"UPDATE usuarios SET equipe=$id_feed,raises=raises - 5 WHERE id=$id");
                 





 if($q)
  echo "success";
 else
  echo "error";



?>