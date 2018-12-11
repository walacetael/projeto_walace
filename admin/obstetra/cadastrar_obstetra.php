<?php 
include('../../funcoes/funcoes.php');
session_start();
$usuarios['email'] = $_POST['email'];
$usuarios['senha'] = $_POST['senha'];
$usuarios['id_nivel_acesso'] = 2;
$id_usuario = insert('usuarios',$usuarios);

$index=1;
$dia_semana = $_POST['dia_semana'];
foreach($dia_semana as $chave=>$valor){
    if($index == sizeof($dia_semana)){
             $horario_string .= $valor;
          }else{
            $horario_string .= $valor."-";
          }

          $index++;
}
$horario['dia_da_semana']=$horario_string;
$horario['periodo'] = $_POST['periodo'];
$id_horario = insert('horario',$horario);

$obstetra['nome'] = $_POST['nome'];
$obstetra['telefone'] = $_POST['telefone'];
$obstetra['formacao'] = $_POST['formacao'];
$obstetra['usuario_id'] = $id_usuario;
$obstetra['horario_id'] = $id_horario;
insert('obstetra',$obstetra);
$_SESSION['msg'] = 'obstetra cadastrado.';
?>