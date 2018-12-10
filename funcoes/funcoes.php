<?php  
require_once('conexao.php');

//Tabela e colunas e where
function select($tabela,$colunas, $where= false){
  $pdo=conexao();     
                        if($where){
                          foreach($where as $chave => $valor){    
                            if(sizeof($where)>1){
                              $where .= $chave.' '.$valor.', ';
                            }
                            else
                            {
                              $where = $chave.' '.$valor.'';
                            }
                          }
                          $valores = $pdo->query('SELECT '.$colunas.' FROM '.$tabela.' WHERE '.$where);
                        }else{
                            $valores = $pdo->query('SELECT '.$colunas.' FROM '.$tabela);
                        }

                        return $valores->fetchAll();
}



//Tabela e Valores array ex: nome=>$valor
function insert($tabela,$valores){
  $pdo=conexao();
  try {
      foreach($valores as $chave => $valor){    
        if(sizeof($valores)>1){
          $parametro .= ':'.$chave.', ';
          $colunas .= $chave.',';
        }
        else
        {
          $parametro = ':'.$chave;
          $colunas = $chave;
        }
        $execute[':'.$chave]= $valor;  
        };
        $stmt = $pdo->prepare('INSERT INTO '.$tabela.' ('.$colunas.') VALUES('.$parametro.')');
        $stmt->execute($execute);
        echo $stmt->rowCount(); 
  }
    catch(PDOException $e) 
  {
    echo 'Error: ' . $e->getMessage();
  }
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









?>