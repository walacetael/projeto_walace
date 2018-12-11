<?php 
include('../../funcoes/funcoes.php');
session_start();
$usuarios['email'] = $_POST['email'];
$usuarios['senha'] = $_POST['senha'];
$usuarios['id_nivel_acesso'] = 4;
$id_usuario = insert('usuarios',$usuarios);

$atendente['nome'] = $_POST['nome'];
$atendente['telefone'] = $_POST['telefone'];
$atendente['usuario_id'] = $id_usuario;

insert('atendimento',$atendente);
$_SESSION['msg'] = 'atendente cadastrado.';
header("Location: ../index.php");
?>