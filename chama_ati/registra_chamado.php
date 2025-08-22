<?php
    session_start();

    $arquivo = fopen('../../chama_ati/arquivo.hd','a');

    $titulo = str_replace('#','.',$_POST['titulo']);
    $categoria = str_replace('#','.',$_POST['categoria']);
    $descricao = str_replace('#','.',$_POST['descricao']);

    //implode('#','$_POST');

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
    //echo $texto;

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('abrir_chamado.php');
?>