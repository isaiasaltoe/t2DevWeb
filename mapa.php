<?php
session_start();
$pageTitle = 'Mapa do Site';
include 'includes/header.php';
?>
<main class="container">
    <h2>Mapa do Site</h2>
    <div class="site-map">
        <div class="site-map__col">
            <h3>Público</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
        <div class="site-map__col">
            <h3>Área Restrita</h3>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="enviar-mensagem.php">Enviar mensagem</a></li>
                <li><a href="mensagens-recebidas.php">Mensagens recebidas</a></li>
                <li><a href="ver-mensagem.php?id=1">Visualizar mensagem (exemplo)</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </div>
    </div>
</main>
<?php include 'includes/footer.php'; ?>
