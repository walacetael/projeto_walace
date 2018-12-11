<?php include('../include/header.php') ?>
<?php include('../funcoes/funcoes.php'); ?>
<?php 
$obstetra = ['nome'=> 'walace','telefone'=> '123123'];
$consulta = select('consultas 
JOIN obstetra ON consultas.obstetra_id = obstetra.id
JOIN paciente ON consultas.obstetra_id = paciente.id','obstetra.nome as nome_obstetra, paciente.nome as nome_paciente, consultas.dia_hora_consulta'); ?>
<--!  asdsd --!>

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
                                    <h6 class="d-block"><a href="javascript:void(0)">1,500</a> Video Uploads</h6>
                                    <h6 class="d-block"><a href="javascript:void(0)">300</a> Blog Posts</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="consultas-tab" data-toggle="tab" href="#consultas" role="tab" aria-controls="consultas" aria-selected="false">Consultas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="obstetra-tab" data-toggle="tab" href="#obstetra" role="tab" aria-controls="obstetra" aria-selected="false">Obstetra</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="atend-tab" data-toggle="tab" href="#atend" role="tab" aria-controls="atend" aria-selected="false">Atendimento</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="paciente-tab" data-toggle="tab" href="#paciente" role="tab" aria-controls="paciente" aria-selected="false">Paciente</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="relat-tab" data-toggle="tab" href="#relat" role="tab" aria-controls="relat" aria-selected="false">Relatorio de Erros</a>
                            </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="atend" role="tabpanel" aria-labelledby="consultas-tab">
                            atend
                            </div>
                            <div class="tab-pane fade" id="obstetra" role="tabpanel" aria-labelledby="consultas-tab">
                            obstetra
                            </div>
                            <div class="tab-pane fade" id="paciente" role="tabpanel" aria-labelledby="consultas-tab">
                            paciente
                            </div>
                            <div class="tab-pane fade" id="relat" role="tabpanel" aria-labelledby="consultas-tab">
                            relat
                            </div>
                            <div class="tab-pane fade" id="consultas" role="tabpanel" aria-labelledby="consultas-tab">
                            
                            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Paciente</th>
      <th scope="col">Obstetra</th>
      <th scope="col">Horario</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($consulta as $chave){ ?>
    <tr>
    
      <th> <?php  echo($chave['nome_paciente'])  ?> </th>
      <th> <?php  echo($chave['nome_obstetra'])  ?> </th>
      <th> <?php  echo($chave['dia_hora_consulta'])  ?> </th>
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
<?php include('../include/bottom.php') ?>
<?php include('../include/scripts.php') ?>