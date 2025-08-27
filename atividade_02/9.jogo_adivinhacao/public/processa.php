<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo Adivinhação</title>
</head>
<body>
    <?php
    session_start();

    if (!isset($_SESSION['numero_secreto'])) {
        $_SESSION['numero_secreto'] = rand(1, 100);
        $_SESSION['tentativas'] = 0;
    }

    $palpite = (int) $_POST['palpite'];
    $_SESSION['tentativas']++;

    function verificaPalpite($palpite, $secreto) {
        if ($palpite < $secreto) {
            return "O número é MAIOR que $palpite.";
        } elseif ($palpite > $secreto) {
            return "O número é MENOR que $palpite.";
        } else {
            return "CORRETO!";
        }
    }

    $resultado = verificaPalpite($palpite, $_SESSION['numero_secreto']);

    echo "<h2>Seu palpite: $palpite</h2>";
    echo "<p>$resultado</p>";

    if ($resultado === "CORRETO!") {
        echo "<p>Você acertou em {$_SESSION['tentativas']} tentativas!</p>";
        session_destroy(); // reseta o jogo
        echo "<br><a href='../index.php'>Jogar novamente</a>";
    } else {
        echo "<a href='../index.php'>Tentar novamente</a>";
    }
    ?>
</body>
</html>
