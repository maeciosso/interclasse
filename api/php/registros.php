<?php
    print_r($_POST);

    $arquivo = fopen('./textos/datas.txt', 'a');
    $historico = fopen('textos/historico.txt', 'a');

    $timestamp = strtotime($_POST['data']);

    $data = date('d/m/Y', $timestamp);
    $opcoes = $_POST['opcoes'];
    $turma = $_POST['turmas'];

    $texto = $data . '#' . $opcoes . '#' . $turma . PHP_EOL;


    fwrite($arquivo, $texto);
    fclose($arquivo);
    fwrite($historico, $texto);
    fclose($historico);
    header('location: criarData.php');