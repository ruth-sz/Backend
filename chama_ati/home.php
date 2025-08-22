<?php
  require_once("validador_acesso.php");
  /*se houver erro na inclusao do script que valida o usuario, havera FATAL ERROR e o script nao sera interpretado
  impedindo o acesso ao conteudo*/
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>ChamaATI - home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="../chama_ati/imagens/logo.png" width="30" height="30" class="d-inline-block align-center" alt="">
        ChamaATI
      </a>
      <!-- Botao de logout -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logout.php" id="sair">SAIR</a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <div class="row">
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
    <!-- Abrir chamados -->
                  <a href="abrir_chamado.php">
                  <img src="../chama_ati/imagens/icone_abrir_chamado.png" width="150" height="150">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
    <!-- Consultar chamados -->
                  <a href="consultar_chamado.php">
                  <img src="../chama_ati/imagens/icone_consultar_chamado.png" width="150" height="150">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>