<?php
    require_once 'validador.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Interclasse</title>
  <link rel="stylesheet" href="css/admin.css">
  <link rel="icon" href="src/icon.png">
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
        <li><a href="imagens.php">Imagens</a></li>
      </ul>
    </section>
    <section class="secao-conteudo">
      <?php
      if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
        if (file_exists($pagina . '.php')) {
          include_once $pagina . '.php';
        } else {
          echo '<h1>Página não encontrada!</h1>';
        }
      } else {
        include_once 'home.php';
      }
      ?>
    </section>
  </main>
  <footer>
    <p>&copy; 2024 Interclasse - Todos os direitos reservados</p>
  </footer>
</body>
</html>
