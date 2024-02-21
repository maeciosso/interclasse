<?php
    require_once 'validador.php'
?>
<?php
    $arquivo = fopen('./interclasse/textos/datas.txt', 'r');  

    $chamados = array();

    while(!feof($arquivo)){
       $registro = fgets($arquivo);
       $chamados[] = $registro;
    }
    fclose($arquivo);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluirChamado'])) {
        $indiceExcluir = $_POST['excluirChamado'];
        
        if (isset($chamados[$indiceExcluir])) {
            unset($chamados[$indiceExcluir]);
            
            // Reindexa o array
            $chamados = array_values($chamados);
            
            // Atualiza o arquivo datas.txt com os chamados restantes
            $arquivo = fopen('./interclasse/textos/datas.txt', 'w');
            fwrite($arquivo, implode("", $chamados));
            fclose($arquivo);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/datas.css">
    <link rel="icon" href="src/icon.png">
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datas dos jogos</title>
</head>
<body>
<header>
    <section>
        <a href="logout.php"><button type="button">Log out</button></a>
        <a href="index.php"><button type="button">Home</button></a>
    </section>
    <h1>Admin Interclasse</h1>
  </header>
    <section class="secao-menu">
      <ul>
        <li><a href="times.php">Times</a></li>
        <li><a href="modalidades.php">Modalidades</a></li>
        <li><a href="" class="select">Calendário de Jogos</a></li>
        <li><a href="imagens.php">Imagens</a></li>
      </ul>
    </section>
    <br>    
    <main>
        <div>
            <h1>criar data</h1>
            <br><hr><br><br>
        <form action="registros.php" method="post">
            <input type="date" name="data" id="data">
                <select name="opcoes" id="opcoes">
                    <option value="Treino">Treino</option>
                    <option value="Jogo">Jogo</option>
                    <option value="Outro">outro</option>
                </select>

                <select name="turmas" id="turmas">
                    <option value="EM1MA">EM1Ma</option>
                    <option value="EM1MB">EM1Mb</option>
                    <option value="EM1MC">EM1Mc</option>
                    <option value="EM2MA">EM2Ma</option>
                    <option value="EM2MB">EM2Mb</option>
                    <option value="EM2MC">EM2Mc</option>
                    <option value="EM3MA">EM3Ma</option>
                    <option value="EM3MB">EM3Mb</option>
                    <option value="EM3MC">EM3Mc</option>
                </select>
                <select name="esporte" id="esporte">
                    <option value="reuniao">reuniao</option>
                    <option value="Futebol">Futebol</option>
                    <option value="Volei">Volei</option>
                    <option value="Handball">Handball</option>
                    <option value="Basquete">Basquete</option>
                </select>
                <br><br><br><br><br>
            <div class="div">
                <button class="btn">Criar</button>
            </div>
        </form>
        </div>

        <div>
            <h1>excluir data</h1>
            <br><hr><br><br>
            <div class="div2">
                <?php foreach($chamados as $indice => $i) {
                    $x = explode('#', $i);

                    if(count($x) < 3){
                        continue;
                    }
                ?>

                <div class="chamado">
                    <?php echo '<p>' . $x[0] . '</p>' ?>
                    <?php echo '<p>' . $x[1] . '</p>' ?>
                    <?php echo '<p>' . $x[2] . '</p>' ?>
                    <?php echo '<p>' . $x[3] . '</p>' ?>

                    <form method="post" action="">
                        <input type="hidden" name="excluirChamado" value="<?php echo $indice; ?>">
                        <button type="submit" id="excluir">
                            <lord-icon src="https://cdn.lordicon.com/wpyrrmcq.json" trigger="hover" style="width:40px;height:40px" ></lord-icon>
                        </button>
                        </form>
                    </div>
                    <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>