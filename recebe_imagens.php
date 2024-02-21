<?php
session_start();

// Pasta para salvar as imagens
$pasta = "interclasse/imagens/";

// Verifica se o formulário foi enviado
if (isset($_FILES['imagens'])) {
    $imagens = $_FILES['imagens'];

    // Valida se todas as imagens são válidas
    $erros = [];
    foreach ($imagens['error'] as $key => $error) {
        if ($error !== UPLOAD_ERR_OK) {
            $erros[] = "Erro no upload da imagem $key: " . $error;
        }
    }

    // Se não houver erros, salva as imagens e exibe na tela
    if (empty($erros)) {
        foreach ($imagens['name'] as $key => $name) {
            $extensao = pathinfo($name, PATHINFO_EXTENSION);
            $novoNome = uniqid() . "." . $extensao;

            if (move_uploaded_file($imagens['tmp_name'][$key], $pasta . $novoNome)) {
                $_SESSION['imagens'][] = $pasta . $novoNome;
            } else {
                $erros[] = "Erro ao mover a imagem $key para a pasta";
            }
        }
    }

    // Se houver erros, exibe as mensagens de erro
    if (!empty($erros)) {
        echo "<ul>";
        foreach ($erros as $erro) {
            echo "<li>$erro</li>";
        }
        echo "</ul>";
    }
}

header("Location: imagens.php");
