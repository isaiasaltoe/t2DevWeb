<?php
session_start();

// Verifica se o usuário não está logado
if(!isset($_SESSION['idUsuario'])) {
    // Redireciona para a página de login
    header('Location: login.php');
    exit();
}
?>