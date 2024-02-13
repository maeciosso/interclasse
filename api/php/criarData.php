<?php
    require_once 'validador.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/data.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div>
            <h2>Escolha a data:</h2>
            <br><hr><br><br>
                <div class="div">
                    <form action="registros.php" method="post">
                        <input type="date" name="data" id="data">

                        <select name="opcoes" id="opcoes">
                            <option value="treino">Treino</option>
                            <option value="jogo">Jogo</option>
                            <option value="outro">outro</option>
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

                        <div class="div">
                            <button>Criar</button>
                            <a href="adminPanel.php"><button type="button">voltar</button></a>
                        </div>
                    </form>
                </div> 
        </div>
    </main>
</body>
</html>