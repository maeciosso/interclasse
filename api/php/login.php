<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="topBar">
        <a href="index.php">voltar</a>
    </div>

    <div id="form">
        <main>
            <form action="valida_login.php" method="post">
                <div>
                    <h1>Login:</h1>
                    <br><br>
                    <label for="nome">Nome:</label>
                    <br>
                    <input type="text" name="nome" id="nome" class="login" required>
                    <br>
                    <label for="senha">Senha:</label>
                    <br>
                    <input type="password" name="senha" id="senha" class="login" required>
                        <div>
                            <input type="checkbox" name="senhaVer" id="senhaVer">
                            <label for="senhaVer">ver senha</label>
                            <br>
                                <?php
                                    if(isset($_GET['login'])){
                                        echo '<p>erro: nome ou senha incorretos</p>';
                                    }
                                ?>
                            <br>
                            <button type="submit">logar</button>
                        </div>
                </div>
            </form>
        </main>
    </div>
</body>
</html>