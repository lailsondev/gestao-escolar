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
        <h1 class="display-4">Cadastro de Turmas</h1>
    </div>
</section>

<section class="container">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <!-- Formulário de Turmas -->
        <div class="col-md-6">
            <form action="/class/store" method="POST">
                <div class="form-group">
                    <label for="input-room">Sala</label>
                    <input type="text" class="form-control" id="input-room" name="input-room"
                           placeholder="Nº da Sala">
                </div>
                <div class="form-group">
                    <label for="grade">Série</label>
                    <input type="text" class="form-control" id="grade" name="input-grade" placeholder="Série">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</section>