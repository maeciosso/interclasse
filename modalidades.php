<?php

require_once 'validador.php';

// Abrir o arquivo datas.txt
$arquivoDatas = fopen('./interclasse/textos/datas.txt', 'r');

// Criar arquivos para cada categoria
$arquivoFutebol = fopen('./interclasse/textos/futebol.txt', 'w');
$arquivoVolei = fopen('./interclasse/textos/volei.txt', 'w');
$arquivoHandball = fopen('./interclasse/textos/handball.txt', 'w');
$arquivoBasquete = fopen('./interclasse/textos/basquete.txt', 'w');

// Loop para ler cada linha do arquivo datas.txt
while (($linha = fgets($arquivoDatas)) !== false) {
  // Verificar se a linha contém a palavra "Futebol"
  if (strpos($linha, 'Futebol') !== false) {
    // Escrever a linha no arquivo futebol.txt
    fwrite($arquivoFutebol, $linha);
  } elseif (strpos($linha, 'Volei') !== false) {
    // Escrever a linha no arquivo volei.txt
    fwrite($arquivoVolei, $linha);
  } elseif (strpos($linha, 'Handball') !== false) {
    // Escrever a linha no arquivo handball.txt
    fwrite($arquivoHandball, $linha);
  } elseif (strpos($linha, 'Basquete') !== false) {
    // Escrever a linha no arquivo handball.txt
    fwrite($arquivoBasquete, $linha);
  }
}

// Fechar os arquivos
fclose($arquivoDatas);
fclose($arquivoFutebol);
fclose($arquivoVolei);
fclose($arquivoHandball);
fclose($arquivoBasquete);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/modalidades.css">
    <link rel="icon" href="src/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modalidades</title>
</head>
<body>
<header>
<section>
        <a href="logout.php"><button type="button">Log out</button></a>
        <a href="index.php"><button type="button">Home</button></a>
    </section>
    <h1>Admin Interclasse</h1>
  </header>
  <main>
    <section class="secao-menu">
      <ul>
        <li><a href="times.php">Times</a></li>
        <li><a href="" class="select">Modalidades</a></li>
        <li><a href="jogos.php">Calendário de Jogos</a></li>
        <li><a href="imagens.php">Imagens</a></li>
      </ul>
    </section>
    <main>
        <div id="grupo">
        <div class="futebol">
            <h1>Futebol:</h1>
                <?php
                // Ler o conteúdo do arquivo TXT
                $conteudoF = file_get_contents('./interclasse/textos/futebol.txt');
                
                // Separar o conteúdo por linhas
                $linhas = explode("\n", $conteudoF);
                
                // Exibir cada linha em um parágrafo
                foreach ($linhas as $linha) {
                  echo "<p>$linha</p>";
                }
                ?>
        </div>
        <div class="volei">
        <h1>Volei:</h1>
                <?php
                // Ler o conteúdo do arquivo TXT
                $conteudoV = file_get_contents('./interclasse/textos/volei.txt');
                
                // Separar o conteúdo por linhas
                $linhas2 = explode("\n", $conteudoV);
                
                // Exibir cada linha em um parágrafo
                foreach ($linhas2 as $linha) {
                  echo "<p>$linha</p>";
                }
                ?>
        </div>
        <div class="handball">
        <h1>Handball:</h1>
                <?php
                // Ler o conteúdo do arquivo TXT
                $conteudoH = file_get_contents('./interclasse/textos/handball.txt');
                
                // Separar o conteúdo por linhas
                $linhas3 = explode("\n", $conteudoH);
                
                // Exibir cada linha em um parágrafo
                foreach ($linhas3 as $linha) {
                  echo "<p>$linha</p>";
                }
                ?>
        </div>
        <div class="basquete">
        <h1>Basquete:</h1>
                <?php
                // Ler o conteúdo do arquivo TXT
                $conteudoB = file_get_contents('./interclasse/textos/basquete.txt');
                
                // Separar o conteúdo por linhas
                $linhas4 = explode("\n", $conteudoB);
                
                // Exibir cada linha em um parágrafo
                foreach ($linhas4 as $linha) {
                  echo "<p>$linha</p>";
                }
                ?>
        </div>
      </div>
    </main>
</body>
</html>