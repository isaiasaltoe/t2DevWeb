<?php include 'includes/header.php'; ?>

<main class="container">
    <div class="form-container">
        <h2>Crie sua conta</h2>
        <form action="processa-cadastro.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="login">Nome de usuário</label>
                <input type="text" id="login" name="login" required maxlength="13">
                <small>Máximo de 13 caracteres</small>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required maxlength="10">
                <small>Máximo de 10 caracteres</small>
            </div>
            <div class="form-group">
                <label for="confirmar-senha">Confirmar senha</label>
                <input type="password" id="confirmar-senha" name="confirmar-senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <p class="login-link">Já tem uma conta? <a href="login.php">Faça login</a></p>
    </div>
</main>

<?php include 'includes/footer.php'; ?>