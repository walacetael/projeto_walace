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
   <h2>Login</h2>
   <p>preencha os campos com os teus dados pessoais</p>
   </div>
   <form id="Login" method="post" action="logar.php">
        <div class="form-group">
           <input type="email" class="form-control" id="inputEmail" placeholder="Email" require name="email">
        </div>
        
        <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" placeholder="senha" require name="senha">
        </div>

    <p class="botto-text" style="color:black"> Cadastre-se <a href="cadastrar.php">Aqui!</a> </p>
        <button type="submit" class="btn btn-primary">login</button>

    </form>
    </div>
</div>
</div>
</div>


</body>
</html>
