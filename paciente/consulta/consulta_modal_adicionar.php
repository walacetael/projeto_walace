<div class="modal fade" id="atendente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cadastrar atendente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="consulta/fazer_consulta.php" method="post">
        <div class="form-group">
            <label for="semana">Dias da Semana</label>
            <select name="dia_semana">
            <option value="seg" selected>Segunda</option>
            <option value="ter">Terça</option>
            <option value="qua">Quarta</option>
            <option value="qui">Quinta</option>
            <option value="sex">Sexta</option>
            </select> 
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar consulta</button>
        </form>
      </div>
      </div>
  </div>
</div>