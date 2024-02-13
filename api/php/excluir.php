<?php
    require_once 'validador.php';

    $arquivo = fopen('./textos/datas.txt', 'r');  

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
            $arquivo = fopen('./textos/datas.txt', 'w');
            fwrite($arquivo, implode("", $chamados));
            fclose($arquivo);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/excluir.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div>
            <div class="grupo">
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

                    <form method="post" action="">
                        <input type="hidden" name="excluirChamado" value="<?php echo $indice; ?>">
                        <button type="submit" id="excluir">Excluir</button>
                        </form>
                    </div>
                    <?php } ?>
                </div>
                <a href="adminPanel.php"><button id="voltar">Voltar</button></a>
            </div>
        </main>
    </body>
    </html>
