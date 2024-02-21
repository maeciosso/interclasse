<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/blobz.css">
    <link rel="icon" href="src/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div id="form">
        <div class="tk-blob" style="--time: 30s; --amount: 10; --fill: #FF0004">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 274 303.2"><path d="M260.2 41.4c20 29.2 14.6 74.5 7.2 124.4-7.3 49.9-16.6 104.5-49.2 126-32.5 21.6-88.4 10.2-132-15.2s-75-64.7-83.6-107.8C-6.1 125.7 8 79 36.3 47.8 64.5 16.7 107 1.3 150.9.1c43.9-1.1 89.3 12 109.3 41.3z"></path></svg>
        </div>
        <div class="tk-blob" style="--time: 20s; --amount: 10; --fill: #1A8851">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 341.4 374.7"><path d="M309.9 70.6c37.8 52.7 39.8 128.7 15.4 184.1-24.3 55.4-75 90.1-125.4 107.4-50.4 17.4-100.4 17.4-136.2-3.3-35.7-20.7-57.2-62-62.4-102.1-5.2-40.2 5.8-79 29.1-128.3C53.6 79.1 89.1 19.3 143.7 4.1 198.3-11.2 272 18 309.9 70.6z"></path></svg>
        </div>
        <div class="tk-blob" style="--time: 10s; --amount: 10; --fill: #0004FF">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 317.5 353.7"><path d="M291.8 55.3c30.4 39.9 30.7 102 17 160.4-13.8 58.3-41.6 112.9-84 130.9s-99.3-.6-137-30C50.2 287.1 32 246.9 17 200.5 2.1 154.1-9.6 101.4 11.5 63.6 32.6 25.8 86.6 2.8 143.8.2c57.2-2.6 117.6 15.2 148 55.1z"></path></svg>
        </div>
        <main>
            <form action="./valida_login.php" method="post">
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
                            <input type="checkbox" id="showPassword" onchange="togglePasswordVisibility()" />
                            <label for="showPassword">ver senha</label>
                            <br>
                                <?php
                                    if(isset($_GET['login'])){
                                        echo '<p>erro: nome ou senha incorretos</p>';
                                    }
                                ?>
                            <br>
                            <button type="submit">logar</button>
                            <br><br>
                            <a href="index.php"><button type="button">voltar</button></a>
                        </div>
                </div>
            </form>
        </main>
    </div>

    <script src="scripts/senha.js"></script>
</body>
</html>