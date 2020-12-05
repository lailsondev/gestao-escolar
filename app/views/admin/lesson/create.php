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
        <h1 class="display-4">Cadastro de Aulas</h1>
    </div>
</section>

<section class="container">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-6">
            <form action="/lesson/store" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="input-data">Data</label>
                        <input type="date" class="form-control" id="input-data" name="date">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-discipline">Disciplina</label>
                        <select id="input-discipline" name="id_discipline" class="form-control">
                            <option selected>Escolha...</option>
                            <?php foreach ($disciplines as $discipline): ?>
                                <option value="<?= $discipline->id; ?>"><?= $discipline->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-name-teacher">Professor</label>
                        <select id="input-name-teacher" name="id_teacher" class="form-control">
                            <option selected>Escolha...</option>
                            <?php foreach ($teachers as $teacher): ?>
                                <option value="<?= $teacher->id; ?>"><?= $teacher->full_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="input-entry-time">Entrada</label>
                        <input type="time" class="form-control" id="input-entry-time" name="entry_hours">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="input-exit-time">Saída</label>
                        <input type="time" class="form-control" id="input-exit-time" name="exit_hours">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="input-serie">Série</label>
                        <select id="input-serie" name="id_serie" class="form-control">
                            <option selected>Escolha...</option>
                            <?php foreach ($series as $serie): ?>
                                <option value="<?= $serie->id; ?>"><?= $serie->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="input-name-room">Sala</label>
                        <select id="input-name-room" name="id_room" class="form-control">
                            <option selected>Escolha...</option>
                            <?php foreach ($rooms as $room): ?>
                                <option value="<?= $room->id; ?>"><?= $room->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group mt-1">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</section>