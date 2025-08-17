<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebForum - <?php echo $pageTitle ?? 'Troca de Mensagens'; ?></title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="index.php">WebForum</a></h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php if(isset($_SESSION['idUsuario'])): ?>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Sair</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="cadastro.php">Cadastro</a></li>
                    <?php endif; ?>
                                    <li><a href="mapa.php">Mapa</a></li>
                </ul>
            </nav>
        </div>
    </header>