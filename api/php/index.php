<?php
  $arquivo = fopen('./textos/datas.txt', 'r');  

  $chamados = array();

  while(!feof($arquivo)){
     $registro = fgets($arquivo);
     $chamados[] = $registro;
  }
  fclose($arquivo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"blog" time camar</title>
</head>
<body>
    <div id="topBar"><a href="adminPanel.php">🙍painel:</a></div>    
    <header>
        <h1>logo</h1>


    </header>
    <nav>
        <ul>
            <a href=""><li>opcao 1</li></a>
            <li>|</li>
            <a href=""><li>opcao 2</li></a>
            <li>|</li>
            <a href=""><li>opcao 3</li></a>
            <li>|</li>
            <a href=""><li>opcao 4</li></a>
        </ul>
    </nav>

    <div id="carousel-container">
        <div id="carousel">
          <div class="carousel-item">
            <div class="imagens"></div>
          </div>
          <div class="carousel-item">
            <div class="imagens"></div>
          </div>
          <div class="carousel-item">
            <div class="imagens"></div>
          </div>
        </div>
      </div>

      <br><br><br>

      <main>
        <br>
        <h2>Datas especiais</h2>
        <HR></HR>
        <div class="grupo">
          <?php 
            foreach($chamados as $i){
              $x = explode('#', $i);
              if(count($x) < 3){
                continue;
              }
          ?>

          <div class="cronograma">
            <?php echo '<p>' . $x[0] . '</p>' ?>
            <?php echo '<p>' . $x[1] . '</p>' ?>
            <?php echo '<p>' . $x[2] . '</p>' ?>
          </div>

          <?php } ?>
        </div>

        <br><br>

        <div class="times">
          <table>
            <tr>
              <th>fotos</th>
              <th>nome</th>
              <th>turma</th>
            </tr>

            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MA</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MA</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MA</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MA</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MA</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MA</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MA</td>
            </tr>
          </table>

          <table>
            <tr>
              <th>fotos</th>
              <th>nome</th>
              <th>turma</th>
            </tr>

            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MB</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MB</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MB</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MB</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MB</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MB</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MB</td>
            </tr>
          </table>

          <table>
            <tr>
              <th>fotos</th>
              <th>nome</th>
              <th>turma</th>
            </tr>

            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MC</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MC</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MC</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MC</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MC</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MC</td>
            </tr>
            <tr>
              <td>🙍</td>
              <td>teste</td>
              <td>EM3MC</td>
            </tr>
          </table>
        </div>
      </main>

</body>
<script src="script/myJS.js"></script>
</html>