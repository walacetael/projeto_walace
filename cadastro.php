<?php 
session_start();
?>
<link href="css/usuario.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
  <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading"></h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Cadastro</h2>
   <p>preencha os campos com os teus dados pessoais</p>
   </div>
   <?php if(isset($_SESSION['msg'])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                    <center><strong><?php echo($_SESSION['msg']) ?></strong></center>
                                </div>
                                <?php } ?>
   <form id="Login" action="cadastrar.php" method="post">
       <div class="form-group">
           <input type="text" class="form-control" placeholder="Nome" name="nome" require>
       </div>
       
        <div class="form-group">
           <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" require>
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="telefone" name="telefone" require>
        </div> 
        
        <div class="form-group">
            Data de nascimento
            <input type="date" class="form-control" name="data_de_nasc" require>
        </div>
        
        <div class="form-group">    
            <input type="text" class="form-control" placeholder="codigo de validaçao" name="codigo" require>
        </div>
        
        <div class="form-group">
            <input type="password" class="form-control" placeholder="senha" name="senha" require>
        </div>

        <div class="forgot">
            <a href="login.php">Você ja está cadastrado? faça seu login!</a>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
    </div>
    <p class="botto-text"> Pré-natal! Pré-vida! </p>
</div>
</div>
</div>


</body>
</html>
<?php 
session_destroy();
?>