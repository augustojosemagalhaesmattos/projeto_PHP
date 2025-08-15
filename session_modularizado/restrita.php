<?php 
session_start(); // Sempre iniciar sessão

// Verifica se usuario está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Verifica tempo de inatividade (10 minutos = 600 segundos)
if (time() - $_SESSION['ultimo_acesso'] > 600) {
    session_destroy();
    header("Location: login.php");
    exit();
}

// Atualiza ultimo acesso
$_SESSION['ultimo_acesso'] = time();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Area Restrita</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</h1>
    <p>Voce está na area restrita.</p>

    <p><a href="logout.php">Sair</a></p>
</body>
</html>