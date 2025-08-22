<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Jogo de Adivinhação</h1>
    <p>Tente acertar o numero que o computador escolheu (entre 1 e 100).</p>

    <form method="POST" action="public/processa.php">
        <label>Digite seu palpite: </label>
        <input type="text" name= "palpite" min="1" max="100" required>
        <button type="submit">Tentar</button>
    </form>    
    
</body>
</html>