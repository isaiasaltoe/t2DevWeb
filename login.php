<?php include 'includes/header.php'; ?>

<main class="container">
    <div class="form-container">
        <h2>Login</h2>
        <form action="processa-login.php" method="POST">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <p class="register-link">Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
    </div>
</main>

<?php include 'includes/footer.php'; ?>