<?php 
include 'includes/auth-check.php'; 
include 'includes/header.php'; 

// Aqui você incluiria a lógica para buscar os usuários e assuntos do banco de dados
?>

<main class="container">
    <h2>Enviar Mensagem</h2>
    
    <form action="processa-mensagem.php" method="POST">
        <div class="form-group">
            <label for="destinatario">Destinatário</label>
            <select id="destinatario" name="destinatario" required>
                <option value="">Selecione um destinatário</option>
                <!-- Aqui viriam os usuários do banco de dados -->
                <option value="1">João Silva</option>
                <option value="2">Maria Souza</option>
                <option value="3">Carlos Oliveira</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="assunto">Assunto</label>
            <select id="assunto" name="assunto">
                <option value="">Sem assunto específico</option>
                <!-- Aqui viriam os assuntos do banco de dados -->
                <option value="1">Dúvida</option>
                <option value="2">Sugestão</option>
                <option value="3">Feedback</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" required maxlength="128">
        </div>
        
        <div class="form-group">
            <label for="conteudo">Conteúdo</label>
            <textarea id="conteudo" name="conteudo" rows="6" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>