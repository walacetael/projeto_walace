<?php include('../include/header.php') ?>
<?php include('../funcoes/funcoes.php'); ?>
<?php 
session_start();
$id=4;
include('../cookie.php');
$codigos = select('valida_paciente',' * ',$where=false ,' ORDER BY id DESC');
$obstetra = select('obstetra JOIN usuarios ON usuarios.id = obstetra.usuario_id',' * ');
$paciente = select('paciente JOIN usuarios ON usuarios.id = paciente.usuario_id',' * ');
?>
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" style="width: 150px; margin-top:7px" class="btn btn-secondary" id="btnChangePicture" value="foto" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">Atendimento</a></h2>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                               <form action="./index.php" class="float-right" method="post">
                                    <button class="btn btn-primary " name="logout">Sair</button>
                                    </form>
                                </div>
                            </div>
                                <?php if(isset($_SESSION['msg'])){ ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                    <center><strong><?php echo($_SESSION['msg']) ?></strong></center>
                                </div>
                                <?php } ?>
                        </div>

                        <div class="row">
                            <div class="col-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <!-- consulta -->
                            <li class="nav-item">
                                <a class="nav-link" id="consultas-tab" data-toggle="tab" href="#consultas" role="tab" aria-controls="consultas" aria-selected="false">Fila de espera</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="obstetra-tab" data-toggle="tab" href="#obst" role="tab" aria-controls="obstetra" aria-selected="false">Obstetras</a>
                            </li>
                            <!-- atendimento -->
                            <!-- paciente -->
                            <li class="nav-item">
                                <a class="nav-link" id="paciente-tab" data-toggle="tab" href="#paciente" role="tab" aria-controls="paciente" aria-selected="false">Pacientes</a>
                            </li>
                            
                            </ul>
                            <!-- stendente -->
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="consultas-tab" id="consultas">
                               <form action="valida_paciente/gerar_codigo.php" method="post">
                                    <div class="form-group">
                                        <label for="nome"></label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Gerar novo codigo</button>
                                    </form>
                                      <table class="table table-dark">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">Numero</th>
                                                        <th scope="col">Codigo</th>
                                                        <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach($codigos as $chave){ ?>
                                                        <tr>
                                                        
                                                        <th><?php  echo($chave['id'])  ?>   </th>
                                                        <th><?php  echo($chave['codvalidacao'])  ?>   </th>
                                                        <th><?php  echo($chave['status'])  ?>   </th>
                                                        </tr>
                                                    <?php } ?>
                                                    
                                                    </tbody>
                                                    </table>
                         <?php include("valida_paciente/validar_paciente_modal_adicionar.php") ?>
                            </div>
                             <div class="tab-pane fade" role="tabpanel" aria-labelledby="obstetra-tab" id="obst">
                                                    <table class="table table-dark">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">Nome</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Telefone</th>
                                                        <th scope="col">formaçao</th>
                                                        <th scope="col">Senha</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach($obstetra as $chave){ ?>
                                                        <tr>
                                                        
                                                        <th> <?php  echo($chave['nome'])  ?> </th>
                                                        <th> <?php  echo($chave['email'])  ?> </th>
                                                        <th> <?php  echo($chave['telefone'])  ?> </th>
                                                        <th> <?php  echo($chave['formacao'])  ?> </th>
                                                        <th> <?php  echo($chave['senha'])  ?> </th>
                                                        </tr>
                                                    <?php } ?>
                                                    
                                                    </tbody>
                                                    </table>
                                                    <?php include("obstetra/obstetra_modal_adicionar.php") ?>
                                                    </div>
                            <!-- paciente -->
                            <div class="tab-pane fade" id="paciente" role="tabpanel" aria-labelledby="consultas-tab">
                                                <table class="table table-dark">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Nome</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Telefone</th>
                                                    <th scope="col">data de nascimento</th>
                                                    <th scope="col">Senha</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach($paciente as $chave){ ?>
                                                    <tr>
                                                    
                                                    <th> <?php  echo($chave['nome'])  ?> </th>
                                                    <th> <?php  echo($chave['email'])  ?> </th>
                                                    <th> <?php  echo($chave['telefone'])  ?> </th>
                                                    <th> <?php  echo($chave['data_de_nasc'])  ?> </th>
                                                    <th> <?php  echo($chave['senha'])  ?> </th>
                                                    </tr>
                                                <?php } ?>
                                                
                                                </tbody>
                                                </table>
                                                </div>
                            </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
<?php include('../include/bottom.php');
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    ob_end_clean();
    header("Location: ../login.php");
}
 unset($_SESSION['msg']);;?>
<?php 
include('../include/scripts.php');

?>