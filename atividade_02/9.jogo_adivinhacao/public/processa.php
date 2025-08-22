<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo Adivinhção</title>
</head>
<body>
    <?php
    session_start();

    if(!isset($_SESSION['numero_secreto'])) {
        $_SESSION['numero_secreto'] = rand(1, 100);
        $_SESSION['tentativas'] = 0;
    }

    $palpite = (int) $_POST['palpite'];
    $_SESSION['tentativas']++;

    function verificaPalpite($palpute, $secreto) {
            if ($palpite < $secreto) {
                return "o número é MAIOR que $palpite.";
            } elseif ($palpite > $secreto) {
                return "O número é MENOR que $palpite.";
            } else {
                return"CORRETO!";
            }
        }

    $resultado= verificaPalpite($palpite, $numero_secreto);
        
        
    
</body>
</html>