<?php
    print_r($_POST);

    $arquivo = fopen('./interclasse/textos/datas.txt', 'a');
    $historico = fopen('./interclasse/textos/historico.txt', 'a');

    $timestamp = strtotime($_POST['data']);

    $data = date('d/m/Y', $timestamp);
    $opcoes = $_POST['opcoes'];
    $turma = $_POST['turmas'];
    $esporte = $_POST['esporte'];

    $texto = $data . '#' . $opcoes . '#' . $turma . '#' . $esporte . PHP_EOL;


    fwrite($arquivo, $texto);
    fclose($arquivo);
    fwrite($historico, $texto);
    fclose($historico);
    header('location: jogos.php');