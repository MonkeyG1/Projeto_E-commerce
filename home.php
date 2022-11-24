<?php
include('actions/protect.php');
include_once('conexao.php');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/style.css?ver=1590611604">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/75f0624486.js" crossorigin="anonymous"></script>
  
  <title>Menu</title>
  <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body class=" bg p-3 m-0 border-0 bd-example">
  <nav class="navbar navbar-login fixed-top" style="font-family: 'Roboto Mono', monospace; font-weight:100;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <font style="color: #fff ;"> &nbsp &nbsp < <font style=" font-family: 'Roboto Mono', monospace; font-weight:700; color:#1af38c">G4</font>
        <font style="color:#fff"> /></font>
        <font style="font-family: 'Roboto Mono', monospace; font-weight:100;">&nbsp Sistemas</font>
        </font>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="fas fa-bars" style="color: #fff;"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit; color:#fff">Bem vindo, <strong style="color: rgb(14, 229, 125);"><?php echo $_SESSION['nome'] . '!'; ?></strong></font>
            </font>
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Perto"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active keychainify-checked" aria-current="page" href="home.php">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Home</font>
                </font>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link keychainify-checked" href="#">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Teste</font>
                </font>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a style="color:#fff" class="nav-link dropdown-toggle keychainify-checked" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">
                    Cadastro
                  </font>
                </font>
              </a>
              <ul class="dropdown-menu ">
                <li>
                  <a class="dropdown-item keychainify-checked" href="?page=novo">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit; color:#152c21;">Novo</font>
                    </font>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item keychainify-checked" href="?page=perfil">
                    <font style="vertical-align: inherit; ">
                      <font style="vertical-align: inherit ; color:#152c21;">Editar Usuários</font>
                    </font>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item keychainify-checked" href="logout.php">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit; color:#152c21; font-weight:600;">Sair</font>
                    </font>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col mt-5">
      </div>
    </div>
  </div>
</body>
<?php
    include_once('actions/pagination.php');
?>
</html>