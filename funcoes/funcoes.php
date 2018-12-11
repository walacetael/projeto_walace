<?php  
require_once('conexao.php');

//Tabela e colunas e where
function select($tabela,$colunas, $where= false,$order_by=false){
  $pdo=conexao();     
                        if($where){
                          $index=1;
                          foreach($where as $chave => $valor){    
                            if(sizeof($where)>1){
                              if($index == sizeof($where)){
                                $where_string .= $chave.' '.$valor.'"';
                              }else{
                                $where_string .= $chave.' '.$valor.'" AND ';
                              }
                            }
                            else
                            {
                              $where_string = $chave.' '.$valor.'"';
                            }
                            $index++;
                          }
                          if($order_by){
                            $valores = $pdo->query('SELECT '.$colunas.' FROM '.$tabela.' WHERE '.$where.' '.$order_by);
                          
                          }else{
                            $valores = $pdo->query('SELECT '.$colunas.' FROM '.$tabela.' WHERE '.$where_string);
                          }
                        }
                        else
                        {
                       if($order_by){
                            $valores = $pdo->query('SELECT '.$colunas.' FROM '.$tabela.' '.$order_by);
                            
                          }else{
                            
                            $valores = $pdo->query('SELECT '.$colunas.' FROM '.$tabela);

                          }
                        }

                        return $valores->fetchAll();
}



//Tabela e Valores array ex: nome=>$valor
function insert($tabela,$valores){
  $pdo=conexao();
  try {
    $index=1;  
    foreach($valores as $chave => $valor){    
        if(sizeof($valores)>1){
          if($index == sizeof($valores)){
            $parametro .= ':'.$chave.'';
          }else{
            $parametro .= ':'.$chave.', ';
          }
          if($index == sizeof($valores)){
          $colunas .= $chave.'';
          }else{
          $colunas .= $chave.', ';
          }
        }
        else
        {
          $parametro = ':'.$chave;
          $colunas = $chave;
        }
        $execute[':'.$chave]= $valor;  
    $index++;
      
      };
        $stmt = $pdo->prepare('INSERT INTO '.$tabela.' ('.$colunas.') VALUES('.$parametro.')');
        $stmt->execute($execute);
        $consulta = $pdo->query("SELECT LAST_INSERT_ID()");
        $id = $consulta->fetchColumn();
      }
      catch(PDOException $e) 
      {
        echo 'Error: ' . $e->getMessage();
      }
      return $id; 
  }
//update tabela , valor , where
function update($tabela,$valores,$where) {
  try{
        foreach($valores as $chave => $valor){    
          if(sizeof($valores)>1){
            $valores .= $chave.' = :'.$chave.', ';
          }
          else
          {
            $valores = $chave.' = :'.$chave;
          }
        $execute[':'.$chave]= $valor;  
        };
        foreach($where as $chave => $valor){    
          if(sizeof($where)>1){
            $where .= $chave.' = :'.$chave.', ';
          }
          else
          {
            $where = $chave.' = :'.$chave;
          }
        $execute[':'.$chave]= $valor;  
        };
  $stmt = $pdo->prepare('UPDATE '.$tabela.' set '.$valores.' WHERE '.$where);
  $stmt->execute($execute);
     
  return $stmt->rowCount();
} catch(PDOException $e) {
  return 'Error: ' . $e->getMessage();
}

}





function delete($tabela,$where) {
  $pdo=conexao();
  try{
        foreach($where as $chave => $valor){    
          if(sizeof($where)>1){
            $where2 .= $chave.' = :'.$chave.', ';
          }
          else
          {
            $where2 = $chave.' = :'.$chave;
          }
        $execute[':'.$chave]= $valor;  
        };
  $stmt = $pdo->prepare('DELETE FROM '.$tabela.' WHERE '.$where2);
  $stmt->execute($execute);
     
  return $stmt->rowCount();
  } 
  catch(PDOException $e)
  {
  return 'Error: ' . $e->getMessage();
  }

}

function gerar_codigo($c, $l, $u = FALSE) { 
if (!$u) for ($s = '', $i = 0, $z = strlen($c)-1; $i < $l; $x = rand(0,$z), $s .= $c{$x}, $i++); 
else for ($i = 0, $z = strlen($c)-1, $s = $c{rand(0,$z)}, $i = 1; $i != $l; $x = rand(0,$z), $s .= $c{$x}, $s = ($s{$i} == $s{$i-1} ? substr($s,0,-1) : $s), $i=strlen($s)); 
return $s; 
} 

function pesquisar_cod($codigo){
    $where=['codvalidacao'=>' = "'.$codigo.'"'];
    return $return = select('valida_paciente','*',$where);
   
}  







?>