<section class="jumbotron jumbotron-fluid">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-4">Sistema de Gestão Escolar</h1>
        <p class="lead">Informe seu usuário e senha abaixo para entrar</p>
    </div>
</section>

<section class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <form method="POST" action="/login">
                <div class="form-group">
                    <label for="input-mail">Endereço de email</label>
                    <input type="email" class="form-control" id="input-mail" name="input-mail"
                           aria-describedby="emailHelp" placeholder="Seu email">
                    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com
                        ninguém.</small>
                </div>
                <div class="form-group">
                    <label for="input-password">Senha</label>
                    <input type="password" class="form-control" id="input-password" name="input-password"
                           placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</section>