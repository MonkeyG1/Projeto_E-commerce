<?php
include_once('actions/login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/75f0624486.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/style.css?ver=1590611604">
    <title>Login</title>
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            overflow: hidden;
        }
    </style>
</head>

<body class="bg">
    <header>
        <nav class="navbar navbar-login">
            <a class="navbar-brand" href="#">
                <font style="color: #fff ;"> &nbsp &nbsp < <font style=" font-family: 'Roboto Mono', monospace; font-weight:700; color:#1af38c">G4</font>
                <font style="color:#fff"> /></font>
                <font style="font-family: 'Roboto Mono', monospace; font-weight:100;">&nbsp Sistemas</font>
                </font>
            </a>
        </nav>
    </header>
    <main>
    <section>
        <div class="container mt-5 mb-5">
            <div class="row align-items-center">
                <div class="col-md-6 mx-auto col-lg-4 col-sm-8">
                    <form class="p-4 p-md-5 border rounded-3" id="container-login" action="" method="POST">
                    <h1 style="color:white" class="mb-5">Log<font style="border-bottom: 1px solid #fff; color:#1af38c">in</font></h1>
                        <div class="form-floating">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" id="email" class="form-control" autofocus>
                                <label color="white">E-mail</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="senha" id="senha" class="form-control">
                                <label>Senha</label>
                            </div>
                            <div class="mb-3">
                                <label style="color:white">Lembrar de mim
                                    <input type="checkbox" value="lembrar de mim">
                                </label>
                            </div>
                            <div class=" mb-3">
                                <label>
                                    <a href="?page=novo" target="_blank"  class="keychainify-checked">Cadastre-se</a>
                                </label>
                            </div>
                            <div class=" mb-2">
                                <input type="submit"  value="Entrar" class=" w-100 btn btn-success"></input>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </main>
    

    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__item d-lg-flex justify-content-lg-between align-items-lg-center">
                    <ul class="nav justify-content-center border-bottom pb-3 mb-2">
                        <li><a style="color: #fff; " href="https://github.com/MonkeyG1" target="_blank"><i class="px-2  fa-brands fa-github fa-xl"></i></a></li>
                        <li><a style="color: #fff; " href="https://www.linkedin.com/in/guilherme-cruz-b79099a5" target="_blank"><i class="px-2 fa-brands fa-linkedin fa-xl"></i></a></li>
                        <li><a style="color: #fff; " href="https://chat.whatsapp.com/FDbCuhocmbEDfymQKRWCLt" target="_blank"><i class="px-2  fa-brands fa-whatsapp fa-xl"></i></a></li>
                        <li><a style="color: #fff; " href="#"><i class="px-2  fa-solid fa-mug-hot fa-xl" target="_blank"></i></a></li>
                    </ul>
                    <p style="color:#000" class="text-center text-muted">© 2022 Grupo 4, Inc</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>