<head>
    <link rel="stylesheet" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/style.css?ver=1590611604">
</head>
<div class="container mt-5 mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 mx-auto col-lg-4 col-sm-8">
            <form class="p-4 p-md-5 border rounded-3" id="container-new" action="?page=salvar" method="POST">
            <h1 style="color: #fff;">Novo Cliente</h1>
                <input type="hidden" name="acao" value="cadastrar">
                <div class="mb-3">
                    <label style="color: #fff;">Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="mb-3">
                    <label style="color: #fff;">E-mail</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label style="color: #fff;">Senha</label>
                    <input type="password" name="senha" class="form-control">
                </div>
                <div class="mb-3">
                    <label style="color: #fff;">Data Nasc.</label>
                    <input type="date" name="dt_nasc" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
                <div>
                    <a id="btn-back" href="home.php">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>
