<?php
session_start();

//Variavel que verifica se a autenticacao foi feita
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;
$chamado_dados = null;

$perfis = array(1 => 'Administrativo', 2 => 'Usuario');

//Relacao estatica de usuarios do sistema (s/ banco de dados, hardcode)
$usuarios_app = array(
    array('id' => 1,'email' => 'admin@teste.com', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 2,'email' => 'usuario@teste.com', 'senha' => '1234','perfil_id' => 1),
    array('id' => 3,'email' => 'jose@teste.com', 'senha' => '1234', 'perfil_id' => 2),
    array('id' => 4,'email' => 'maria@teste.com', 'senha' => '1234', 'perfil_id' => 2)
);

//Autenticacao do usuario
foreach($usuarios_app as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }
}
if($usuario_autenticado){
    echo'Usuário autenticado.';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
}else{
    echo'Erro na autenticação.';
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro_login_invalido');
}
?>
