<?php
session_start();

session_destroy();
header('Location: index.php'); /*obriga um redirecionamento pois e necessario fazer uma nova requisicao
para remover as variaveis de sessao do lado do servidor que sao recuperadas pela instancia da aplicacao*/
?>