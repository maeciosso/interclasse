<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/imagens.css">
    <link rel="icon" href="src/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <li><a href="modalidades.php">Modalidades</a></li>
            <li><a href="jogos.php">Calendário de Jogos</a></li>
            <li><a href="" class="select">Imagens</a></li>
        </ul>
        </section>
        <br>

        <div class="formFotos">
        <h1>Envie suas imagens!</h1>
        <br><br><hr>
    <form action="recebe_imagens.php" method="post" enctype="multipart/form-data">
        <input type="file" required name="imagens[]" multiple>
        <br><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_SESSION['imagens'])) {
        foreach ($_SESSION['imagens'] as $imagem) {
            echo "<img src='$imagem' width='200px' height='200px'>";
        }
        unset($_SESSION['imagens']);
    }
    ?>
        </div>

        <div class="biblioteca">
            <?
                $pasta = './interclasse/imagens';

                if(is_dir($pasta)){
                    $conteudoI = scandir($pasta);

                    $conteudoI = array_diff($conteudoI, array('.', '..'));

                    if(empty($conteudoI)){
                        include 'html/no_image.html';
                    }else{
                        include 'html/with_image.php';
                    }
                }else{
                    echo 'diretorio errado';
                }
            ?>
        </div>
    </main>
</body>
</html>