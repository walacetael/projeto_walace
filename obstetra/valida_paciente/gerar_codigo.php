<?php 
include('../../funcoes/funcoes.php');
session_start();
$codigo = gerar_codigo("WALACE123456789", 10);
 while (pesquisar_cod($codigo)==1) {
     $codigo=gerar_codigo("WALACE123456789", 10);
 }
 $novo_codigo['codvalidacao'] = $codigo;
 $novo_codigo['status'] = 'disponivel';
 insert('valida_paciente',$novo_codigo);  

$_SESSION['msg'] = 'Codigo '.$codigo.' GERADO';  
header("Location: ../index.php");
