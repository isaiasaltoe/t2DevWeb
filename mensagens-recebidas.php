<?php 
include 'includes/auth-check.php'; 
include 'includes/header.php'; 

// Aqui você incluiria a lógica para buscar as mensagens do usuário logado
?>

<main class="container">
    <h2>Mensagens Recebidas</h2>
    
    <div class="messages-list">
        <!-- Exemplo de mensagem - isso viria do banco de dados -->
        <div class="message-card">
            <div class="message-header">
                <h3>Título da Mensagem 1</h3>
                <span class="message-sender">De: João Silva</span>
                <span class="message-date">10/05/2023</span>
            </div>
            <div class="message-actions">
                <a href="ver-mensagem.php?id=1" class="btn btn-primary">Ler</a>
                <a href="processa-remover.php?id=1" class="btn btn-danger">Remover</a>
            </div>
        </div>
        
        <div class="message-card">
            <div class="message-header">
                <h3>Título da Mensagem 2</h3>
                <span class="message-sender">De: Maria Souza</span>
                <span class="message-date">08/05/2023</span>
            </div>
            <div class="message-actions">
                <a href="ver-mensagem.php?id=2" class="btn btn-primary">Ler</a>
                <a href="processa-remover.php?id=2" class="btn btn-danger">Remover</a>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>