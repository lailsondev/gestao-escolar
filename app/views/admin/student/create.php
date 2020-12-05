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
        <h1 class="display-4">Cadastro de Alunos</h1>
    </div>
</section>

<section class="container">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-8">
            <form action="/student/store" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input-name">Nome</label>
                        <input type="text" class="form-control" id="input-name" name="full_name"
                        placeholder="Informe o nome do(a) aluno(a)">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input-email-responsible">Responsável</label>
                        <input type="email" class="form-control" id="input-email-responsible"
                               name="responsible" placeholder="Informe o e-mail do responsável">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input-serie">Série</label>
                        <select id="input-serie" name="id_serie" class="form-control">
                            <option selected>Escolha...</option>
                            <?php foreach ($series as $serie): ?>
                                <option value="<?= $serie->id; ?>"><?= $serie->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input-name-room">Sala</label>
                        <select id="input-name-room" name="id_room" class="form-control">
                            <option selected>Escolha...</option>
                            <?php foreach ($rooms as $room): ?>
                                <option value="<?= $room->id; ?>"><?= $room->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</section>