<?php 
include('../../funcoes/funcoes.php');
session_start();
$where=['horario.dia_da_semana'=>'LIKE "%'.$_POST['dia_semana'].'%'];
$obstetra = select('obstetra JOIN horario ON obstetra.horario_id=horario.id ','obstetra.id as obstetra_id, horario.dia_da_semana',$where);
$where2 = ['email'=> '="'.$_SESSION['email']];
$id = select('usuarios JOIN paciente ON paciente.usuario_id = usuarios.id','paciente.id',$where2);

$consultas['paciente_id']=$id[0]['id'];
$consultas['obstetra_id'] = $obstetra[0]['obstetra_id'];
$consultas['dia_hora_consulta'] = $_POST['dia_semana'];
$consultas['data_criacao'] = date("d/m/Y");
insert('consultas',$consultas);

if(isset($obstetra[0]['obstetra_id'])){
    $_SESSION['msg'] = 'Consulta marcada!';
    
}else{
    $_SESSION['msg'] = 'Obstetra indisponivel neste dia';
    
}
header("Location: ../index.php");
?>