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
        <h1 class="display-4">Consulta de Aulas</h1>
    </div>
</section>

<section class="container">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-12">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="input-date">Data da Aula</label>
                        <input type="date" class="form-control" id="input-date" name="input-date" value="2020-09-09"
                               disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="input-name-teacher">Professor</label>
                        <input type="text" class="form-control" id="input-name-teacher" name="input-name-teacher"
                               value="Lailson Conceição" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-serie">Série</label>
                        <input type="text" class="form-control" id="input-serie" name="input-serie" value="1º ano"
                               disabled>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="input-entry-hours">Entrada</label>
                        <input type="time" class="form-control" id="input-entry-hours" name="input-entry-hours"
                               value="08:00" disabled>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="input-exit-hours">Saída</label>
                        <input type="time" class="form-control" id="input-exit-hours" name="input-exit-hours"
                               value="09:45" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-discipline">Disciplina</label>
                        <input type="text" class="form-control" id="input-discipline" name="input-discipline"
                               value="Português" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="input-room">Sala</label>
                        <input type="text" class="form-control" id="input-room" name="input-room" value="19A Térrio"
                               disabled>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <span class="lead d-block mb-3">Clique sobre um registro para preencher as informações acima</span>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Professor</th>
                    <th scope="col">Matéria(s)</th>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <td><a href="#">Lailson Conceição</a></td>
                    <td>Português, Matemática, Física</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td><a href="#">Jacob</a></td>
                    <td>Educação Física</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td><a href="#">Larry</a></td>
                    <td>Inglês</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>