<?php
include 'includes/auth-check.php';
$pageTitle = 'Mensagem';
include 'includes/header.php';

// Placeholder: em uma integração real, buscar a mensagem pelo ID e pelo usuário logado no BD
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Exemplo estático para demonstração visual
$mensagemExemplo = [
    'assunto' => 'Assunto de Exemplo',
    'remetente' => 'Remetente Exemplo <remetente@exemplo.com>',
    'dataEnvio' => '2025-08-10 14:32',
    'conteudo' => 'Olá! Esta é a visualização completa da mensagem. Quando o backend estiver conectado, este conteúdo virá do banco de dados com base no ID e no usuário logado.'
];
?>
<main class="container">
    <nav class="breadcrumb">
        <a href="dashboard.php">Dashboard</a>
        <span>/</span>
        <a href="mensagens-recebidas.php">Mensagens recebidas</a>
        <span>/</span>
        <span>Mensagem #<?php echo htmlspecialchars($id); ?></span>
    </nav>

    <article class="message-full">
        <header class="message-full__header">
            <h2><?php echo htmlspecialchars($mensagemExemplo['assunto']); ?></h2>
            <div class="message-meta">
                <div><strong>De:</strong> <?php echo htmlspecialchars($mensagemExemplo['remetente']); ?></div>
                <div><strong>Data:</strong> <?php echo htmlspecialchars($mensagemExemplo['dataEnvio']); ?></div>
            </div>
        </header>
        <section class="message-full__body">
            <p><?php echo nl2br(htmlspecialchars($mensagemExemplo['conteudo'])); ?></p>
        </section>
        <footer class="message-full__footer">
            <a class="btn btn-secondary" href="mensagens-recebidas.php">Voltar</a>
            <a class="btn btn-danger" href="processa-remover.php?id=<?php echo urlencode($id); ?>">Remover</a>
        </footer>
    </article>
</main>

<?php include 'includes/footer.php'; ?>
