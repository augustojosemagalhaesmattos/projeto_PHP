<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Primeiro PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
    
</head>
<body>
    <h1>Bem-vindo ao PHP</h1>

    <!--
    Formulário HTML
    -method"GET": envia os dados pela URL (ex: ?mensagem=texto)
    -action="": significa que o formulário será enviado para a propria pagina
    -->
    <form method="GET" action="">
        <label>Digite sua mensagem:</label><br>

        <!-- Campo de texto onde o usuário digita -->
         <input type="text" name="mensagem" required>

        <!-- Botão para enviar -->
         <button type="submit">Enviar</button>
    </form>

    <form method="POST" action="processa.php
</body>
</html>