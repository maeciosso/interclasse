<?php
session_start();

    $user = false;

$admin = array(array('nome' => 'admin', 'senha' => 'teste'));

   foreach($admin as $usuario){
    if($_POST['nome'] == $usuario['nome'] && $_POST['senha'] == $usuario['senha']){
        $user = true;
    }
   }
   if($user == true){
    header('location: adminPanel.php');
    $_SESSION['autenticado'] = 'sim';
   }else{
    header('location: login.php?login=erro');
    $_SESSION['autenticado'] = 'nao';
   }
?>