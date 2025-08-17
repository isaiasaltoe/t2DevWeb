<?php 
include 'includes/auth-check.php'; 
include 'includes/header.php'; 
?>

<main class="container">
    <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</h2>
    
    <div class="dashboard-grid">
        <div class="dashboard-card">
            <h3>Enviar Mensagem</h3>
            <p>Envie uma nova mensagem para outro usuário</p>
            <a href="enviar-mensagem.php" class="btn btn-primary">Acessar</a>
        </div>
        
        <div class="dashboard-card">
            <h3>Mensagens Recebidas</h3>
            <p>Visualize suas mensagens recebidas</p>
            <a href="mensagens-recebidas.php" class="btn btn-primary">Acessar</a>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>