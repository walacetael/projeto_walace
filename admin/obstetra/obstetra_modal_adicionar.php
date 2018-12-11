<div class="modal fade" id="obstetra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar Obstetra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="obstetra/cadastrar_obstetra.php" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="tel">Telefone</label>
            <input name="telefone" type="text" class="form-control" id="tel" placeholder="Telefone">
        </div>
        <div class="form-group">
            <label for="formacao">formaçao</label>
            <input name="formacao" type="text" class="form-control" id="formacao" placeholder="Formaçao">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha">
        </div>
        <center><h1>Horario de Atendimento</h1></center>
        <div class="form-group">
            <label for="seg">Segunda</label>
            <input type="checkbox" name="dia_semana[]" value="seg">
            <label for="ter">Terça</label>
            <input type="checkbox" name="dia_semana[]" value="ter">
            <label for="qua">Quarta</label>
            <input type="checkbox" name="dia_semana[]" value="qua">
            <label for="qui">Quinta</label>
            <input type="checkbox" name="dia_semana[]" value="qui">
            <label for="sex">Sexta</label>
            <input type="checkbox" name="dia_semana[]" value="sex">
        </div>
        <div class="form-group">
        <label for="periodo">Turno</label>
        <select name="periodo">
        <option value="manha">Manhã</option>
        <option value="tarde">Tarde</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
      </div>
  </div>
</div>