<?php
    session_start();
    if($_SESSION['autenticado'] == 'sim'){
    } else{
        header('location: login.php');
    }
?>