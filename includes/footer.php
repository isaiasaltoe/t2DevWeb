    <footer class="site-footer">
        <div class="container footer-grid">
            <div>
                <h4>WebForum</h4>
                <p>Um projeto acadêmico de troca de mensagens.</p>
            </div>
            <div>
                <h4>Navegação</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="mapa.php">Mapa do Site</a></li>
                    <?php if(isset($_SESSION['idUsuario'])): ?>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="enviar-mensagem.php">Enviar mensagem</a></li>
                        <li><a href="mensagens-recebidas.php">Mensagens recebidas</a></li>
                        <li><a href="logout.php">Sair</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="cadastro.php">Cadastro</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="container footer-bottom">
            <small>&copy; <?php echo date('Y'); ?> WebForum</small>
        </div>
    </footer>
</body>
</html>
