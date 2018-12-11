<?php include('../include/header.php') ?>
<?php include('../funcoes/funcoes.php'); ?>
<?php 
session_start();
$id=2;
include('../cookie.php');

$where = ['obstetra.usuario_id'=>'="'.$usuario[0]['id']];
$consulta = select('consultas 
JOIN obstetra ON consultas.obstetra_id = obstetra.id 
JOIN paciente ON consultas.obstetra_id = paciente.id','obstetra.nome as nome_obstetra, paciente.nome as nome_paciente, consultas.dia_hora_consulta, consultas.data_criacao',$where); 

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
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">Medico</a></h2>
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
                            <li class="nav-item active">
                                <a class="nav-link " id="consultas-tab" data-toggle="tab" href="#consultas" role="tab" aria-controls="consultas" aria-selected="false">Agendamentos</a>
                            </li>
                            </ul>
                            <!-- stendente -->
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="consultas-tab" id="consultas">
                             
                                                                         <table class="table table-dark">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">Paciente</th>
                                                        <th scope="col">Horario</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach($consulta as $chave){ ?>
                                                        <tr>
                                                        
                                                        <th> <?php  echo($chave['nome_paciente'])  ?> </th>
                                                        <th> <?php  echo($chave['dia_hora_consulta'])  ?> </th>
                                                        </tr>
                                                    <?php } ?>
                                                    
                                                    </tbody>
                                                    </table>
                         <?php include("valida_paciente/validar_paciente_modal_adicionar.php") ?>
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
}?>
<?php 
unset($_SESSION['msg']);
include('../include/scripts.php');

?>