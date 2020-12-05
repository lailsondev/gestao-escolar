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
        <h1 class="display-4">Consulta de Frequência</h1>
    </div>
</section>

<section class="container">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-12">
            <form>
                <small>Filtrar Por:</small>
                <div class="form-row">
                    <div class="form-check form-check-inline col-md-1">
                        <input class="form-check-input" type="radio" name="radio-presence" id="present" value="1">
                        <label class="form-check-label" for="present">Presenças</label>
                    </div>
                    <div class="form-check form-check-inline col-md-1">
                        <input class="form-check-input" type="radio" name="radio-presence" id="absent" value="0">
                        <label class="form-check-label" for="absent">Ausências</label>
                    </div>
                    <div class="form-check form-check-inline col-md-1">
                        <input class="form-check-input" type="radio" name="radio-presence" id="radio-dates"
                               value="2">
                        <label class="form-check-label" for="radio-dates">Datas</label>
                    </div>
                </div>


                <small class="d-block mt-3 mb-1">Informe a matrícula ou nome do aluno</small>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="input-id">Matrícula</label>
                        <input type="text" class="form-control" id="input-id" name="input-id" value="1" disabled>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="input-name">Aluno</label>
                        <input type="text" class="form-control" id="input-name" name="input-name"
                               value="Lailson Conceição" disabled>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="input-data">ㅤ</label>
                        <input type="submit" class="form-control btn btn-primary" value="Pesquisar">
                    </div>
                </div>
            </form>

            <form>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="input-discipline">Disciplina</label>
                        <input type="text" class="form-control" id="input-discipline" name="input-discipline"
                               value="Educação Física" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="input-name-teacher">Professor</label>
                        <input type="text" class="form-control" id="input-name-teacher" name="input-name-teacher"
                               value="Lailson Conceição" disabled>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="input-present">Presenças - Ausências </label>
                        <input type="text" class="form-control" id="input-present" name="input-present"
                               value="10 - 0" disabled>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="input-date-present">Data</label>
                        <input type="date" class="form-control" id="input-date-present" name="input-date-present"
                               value="2020-09-09" disabled>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-12 mt-5">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Responsável</th>
                    <th scope="col">Professor</th>
                    <th scope="col">Disciplina</th>
                    <th scope="col">Presença</th>
                    <th scope="col">Ausência</th>
                    <th scope="col">Data</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <td><a href="#">Mark</a></td>
                    <td>Otto@gmail.com</td>
                    <td>Lailson Conceição</td>
                    <td>Português</td>
                    <td>0</td>
                    <td>1</td>
                    <td>04/09/2020</td>
                </tr>
                <tr>
                    <th>1</th>
                    <td><a href="#">Larry</a></td>
                    <td>Otto@gmail.com</td>
                    <td>Chester das Virgens</td>
                    <td>Inglês</td>
                    <td>0</td>
                    <td>1</td>
                    <td>04/09/2020</td>
                </tr>
                <tr>
                    <th>1</th>
                    <td><a href="#">Jacob</a></td>
                    <td>Otto@gmail.com</td>
                    <td>Sandrinha Santos</td>
                    <td>Educação Física</td>
                    <td>1</td>
                    <td>0</td>
                    <td>05/09/2020</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>