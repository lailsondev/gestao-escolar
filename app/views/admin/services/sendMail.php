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

        <h1 class="display-4">Informar aos Pais</h1>
        <p class="lead">Os e-mails listados abaixo são selecionados automaticamente do banco de dados.</p>
        <p class="lead text-center">Ao carregar esta página, é realizado automaticamente uma consulta no banco de
            dados
            retornando todos os alunos que faltaram na data de hoje. Listando assim, o responsável de cada aluno
            para o envio do e-mail.</p>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="textarea-responsibles">E-mails</label>
                    <textarea class="form-control" name="textarea-responsibles" id="textarea-responsibles" cols="30"
                              rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Comunicar</button>
            </form>
        </div>
    </div>
</section>