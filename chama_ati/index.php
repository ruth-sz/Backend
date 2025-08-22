<html>
  <head>
    <meta charset="utf-8" />
    <title>ChamaATI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 300px;
        margin: 0 auto;
      }
      .card-header{
        display: flex;
        justify-content: center;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        ChamaATI
      </a>
    </nav>
    <div class="container">    
      <div class="row">
        <div class="card-login">
          <div class="card">
            <div class="card-header" margin="0 auto">
              Entre com sua conta
            </div>
            <div class="card-body">
              <!-- Inicio - Formulario de login -->
              <form action="http://localhost/chama_ati/valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                <!-- Alerta de login invalido -->
                <?php 
                  if(isset($_GET['login']) && $_GET['login'] == 'erro_login_invalido'){ ?> 
                  <!-- Se o indice do parametro passado na url existir e tiver o valor conforme definido 
                  (erro_login_invalido), a mensagem de erro é mostrada, caso contrario nao havera erro do php -->
                    <div class="text-danger">
                      Usuário ou senha inválido(s).
                    </div> 
                <?php } ?>
                <!-- Alerta de solicitacao de login para acessar paginas protegidas (caso o usuario tente
                 acessar a pagina pelo link sem ter logado) -->
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2_faca_login'){ ?> 
                    <div class="text-danger">
                      Você precisa estar logado para acessar.
                    </div>
                <?php } ?>
              </form>
              <!-- Fim - Formulario de login -->
            </div>
          </div>
        </div>
    </div>
  </body>
</html>