<?php 
include('funcoes/funcoes.php');
session_start();
$valor = pesquisar_cod($_POST['codigo']);
if(isset($valor)){
    if($valor[0]['status']=='disponivel'){
        
$usuario['email']=$_POST['email'];
$usuario['senha']=$_POST['senha'];
$usuario['id_nivel_acesso']=3;

$id_usuario=insert('usuarios',$usuario);

$paciente['nome']=$_POST['nome'];
$paciente['telefone']=$_POST['telefone'];
$paciente['data_de_nasc']=$_POST['data_de_nasc'];
$paciente['valida_paciente_id']=$valor[0]['id'];
$paciente['usuario_id']=$id_usuario;
$id = insert('paciente',$paciente);


$_SESSION['msg'] = 'Cadastrado Com sucesso';  
header("Location: cadastro.php");

}else{

    $_SESSION['msg'] = 'Codigo Indisponivel! pegue seu codigo de acesso na clinica medica mais proxima';  
}
}else{

    $_SESSION['msg'] = 'Não foi possivel cadastrar';  
}
header("Location: cadastro.php");

