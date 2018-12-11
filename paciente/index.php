<?php include('../include/header.php') ?>
<?php include('../funcoes/funcoes.php'); ?>
<?php 
session_start();
$consulta = select('consultas 
JOIN obstetra ON consultas.obstetra_id = obstetra.id 
JOIN paciente ON consultas.obstetra_id = paciente.id','obstetra.nome as nome_obstetra, paciente.nome as nome_paciente, consultas.dia_hora_consulta'); 

$atendimento = select("atendimento JOIN usuarios ON usuarios.id = atendimento.usuario_id"," * ");

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
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">Walace Da Silva Moreira</a></h2>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
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
                                <a class="nav-link" id="consultas-tab" data-toggle="tab" href="#consultas" role="tab" aria-controls="consultas" aria-selected="false">Consultas</a>
                            </li>
                            </ul>
                            <!-- stendente -->
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" role="tabpanel" aria-labelledby="consultas-tab" id="consultas">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#atendente">
                                                adicionar atendente
                                                </button>
                                                
                                                <?php include("consulta/consulta_modal_adicionar.php") ?>
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
 session_destroy();?>
<?php include('../include/scripts.php') ?>