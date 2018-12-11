<?php 
include('../../funcoes/funcoes.php');
session_start();
$where=['horario.dia_da_semana'=>'LIKE "%'.$_POST['dia_semana'].'%"'];
$obstetra = select('obstetra JOIN horario ON obstetra.horario_id=horario.id ','obstetra.id as obstetra_id, horario.dia_da_semana',$where);

$consultas['paciente_id']=1;
$consultas['obstetra_id'] = $obstetra[0]['obstetra_id'];
$consultas['dia_hora_consulta'] = $_POST['dia_semana'];

insert('consultas',$consultas);
$_SESSION['msg'] = 'Consulta cadastrada';
header("Location: ../index.php");
?>