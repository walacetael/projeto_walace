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
        <form action="atendimento/cadastrar_atendente.php" method="post">
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
            <label for="senha">Senha</label>
            <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
      </div>
  </div>
</div>