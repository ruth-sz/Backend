<?php
//logica de validacao pra sessao - usuario nao autenticado é redirecionado pra pagina inicial pra fazer login
  session_start();
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: index.php?login=erro2_faca_login');
  }
?>