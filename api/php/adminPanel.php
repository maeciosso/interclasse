<?php
    require_once 'validador.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="topBar">
        <a href="logout.php">Logout</a>
        <a href="index.php">Home</a>
    </div>
    
    <div class="itens">
        <main>
            <table>
                <tr>
                    <th>adicionar data</th>
                    <th>||</th>
                    <th>excluir data</th>
                </tr>
                <tr>
                    <td>
                        <a href="criarData.php"><img src="src/paper.svg" alt=""></a>
                    </td>
                    <TD>||</TD>
                    <td>
                        <a href="excluir.php"><img src="src/bin.svg" alt=""></a>
                    </td>
                </tr>
            </table>
        </main>
    </div>
</body>
</html>