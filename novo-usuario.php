<h1>Novo usuario</h1>

    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
        <label>nome</label>
        <input type="text" name="nome" class="form-control">
        </div>

        <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="name@example.com">
        </div>

        <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
        </div>

        <div class="mb-3">
        <label>Data de  nascimento</label>
        <input type="date" name="data_nasc" class="form-control">
        </div>

        <div class="mb-3">
        <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </form>