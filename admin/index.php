<?php 
global $scripts;
$scripts = ""; ?>
<?php include('../include/header.php') ?>



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
                            <div class="tab-pane fade show active" id="dados" role="tabpanel" aria-labelledby="dados-tab">
                                .3hfhsfh.
                                fasfasfsaf
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                .123dsgdfg..
                                fsfasfa
                            </div>
                            <div class="tab-pane fade" id="consultas" role="tabpanel" aria-labelledby="consultas-tab">
                                ..123dfgdfg33.
                                fasfdv
                            </div>
                            <div class="tab-pane fade" id="obstetra" role="tabpanel" aria-labelledby="obstetra-tab">
                                ..123dfgdfg33
                                fadfsd.
                            </div>
                            <div class="tab-pane fade" id="atend" role="tabpanel" aria-labelledby="atend-tab">
                                ..123dfgdfg33.
                                sfasfsafsa
                            </div>
                            <div class="tab-pane fade" id="paciente" role="tabpanel" aria-labelledby="paciente-tab">
                                ..123dfgdfg33.
                                sfkasf
                            </div>
                            </div>
                            <div class="tab-pane fade" id="relat" role="tabpanel" aria-labelledby="relat-tab">
                                ..123dgdfg33.
                                asfasf
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