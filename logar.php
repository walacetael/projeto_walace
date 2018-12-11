<?php 
include('funcoes/funcoes.php');
session_start();

$where = ['email'=> ' = "'.$_POST['email'],'senha'=> '= "'.$_POST['senha']];

$usuario = select('usuarios','email,senha,id_nivel_acesso', $where , false);

 if (isset($usuario[0]['email'])) {
    $_SESSION['email'] = $usuario[0]['email'];
    $_SESSION['senha'] = $usuario[0]['senha'];   
      if($usuario[0]['id_nivel_acesso']==1){
        header("Location: admin/index.php");
    }else if($usuario[0]['id_nivel_acesso']==2){
        header("Location: obstetra/index.php");
    }else if($usuario[0]['id_nivel_acesso']==3){
        header("Location: paciente/index.php");
    }else if($usuario[0]['id_nivel_acesso']==4){
        header("Location: atendente/index.php");
    }
}else{
    header("Location: login.php");

 }





        


