<section class="jumbotron jumbotron-fluid">

    <nav class="btn-group d-flex justify-content-center align-items-center mb-5" role="group"
         aria-label="Grupo de botões com dropdown aninhado">
        <!-- Home -->
        <a href="/dashboard" class="btn btn-secondary">Início</a>
        <!-- Cadastro Dropdown -->
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cadastro
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="/cadastrar/turma">Turma</a>
                <a class="dropdown-item" href="/cadastrar/disciplina">Disciplina</a>
                <a class="dropdown-item" href="/cadastrar/professor">Professor</a>
                <a class="dropdown-item" href="/cadastrar/aula">Aula</a>
                <a class="dropdown-item" href="/cadastrar/aluno">Aluno</a>
                <a class="dropdown-item" href="/cadastrar/frequencia">Frequência</a>
            </div>
        </div>
        <!-- Consulta Dropdown -->
        <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Consulta
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="/consultar/aluno">Aluno</a>
                <a class="dropdown-item" href="/consultar/aula">Aula</a>
                <a class="dropdown-item" href="/consultar/frequencia">Frequência</a>
            </div>
        </div>
        <!-- Comunicar aos pais -->
        <a href="/servicos/informar-pais" class="btn btn-secondary">Informar aos pais</a>
    </nav>

    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4">Cadastro de Professores</h1>
    </div>
</section>

<section class="container">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <!-- Formulário de Professores -->
        <div class="col-md-6">
            <form action="/teacher/store" method="POST">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Informe o nome do(a) professor(a)">
                </div>
                <div class="form-group">
                    <p>Selecione uma ou mais matéria</p>
                </div>

                <?php foreach ($disciplines as $discipline): ?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="check-<?= $discipline->slug; ?>" name="discipline[]" value="<?= $discipline->slug; ?>">
                    <label class="form-check-label" for="check-<?= $discipline->slug; ?>"><?= $discipline->name; ?></label>
                </div>
                <?php endforeach; ?>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</section>