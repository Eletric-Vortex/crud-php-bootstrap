<h1> Novo Usuario </h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="text" class="form-label">Nome</label>
        <!-- o atributo NAME é necessário para recuperar o valor do input no PHP pela variavel $_POST -->
        <input type="text" class="form-control" id="nome" name="nome">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha">
    </div>
    <div class="mb-3">
        <label for="data" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="data" name="data"></label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>