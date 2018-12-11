<?php

session_start();
ob_start();
$where = ['email'=> ' = "'.$_SESSION['email'],'senha'=> '= "'.$_SESSION['senha']];
$usuario = select('usuarios','id,id_nivel_acesso', $where , false);
if ($usuario) {

    if($usuario[0]['id_nivel_acesso']==$id){
  
        
    }else{
        header("Location: ../login.php");

    }
    
}else{
    
    header("Location: ../login.php");
}
