<?php 
include('../../funcoes/funcoes.php');
session_start();
function gerar_codigo($c, $l, $u = FALSE) { 
if (!$u) for ($s = '', $i = 0, $z = strlen($c)-1; $i < $l; $x = rand(0,$z), $s .= $c{$x}, $i++); 
else for ($i = 0, $z = strlen($c)-1, $s = $c{rand(0,$z)}, $i = 1; $i != $l; $x = rand(0,$z), $s .= $c{$x}, $s = ($s{$i} == $s{$i-1} ? substr($s,0,-1) : $s), $i=strlen($s)); 
return $s; 
} 
$codigo = gerar_codigo("WALACE123456789", 10);
 while (pesquisar_cod($codigo)==1) {
     $codigo=gerar_codigo("WALACE123456789", 10);
 }
 $novo_codigo['codvalidacao'] = $codigo;
 $novo_codigo['status'] = 'disponivel';
 insert('valida_paciente',$novo_codigo);


function pesquisar_cod($codigo){
    $where=['codvalidacao'=>'LIKE "%'.$codigo.'%"'];
    $return = select('valida_paciente','*',$where);
    return $return;
}    

$_SESSION['msg'] = 'Codigo '.$codigo.' GERADO';  
header("Location: ../index.php");
