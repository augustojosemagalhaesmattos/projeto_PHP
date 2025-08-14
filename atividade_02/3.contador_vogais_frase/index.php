<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <!--Desenvolva um programa que conte quantas
     vogais existem em uma frase digitada pelo usuário.

Crie uma função que receba a string e retorne a contagem de cada vogal.
Use laços de repetição para percorrer a string.
Exiba ao final quantas vezes cada vogal aparece.
-->
    <header>
        <h1>Contador de Vogais</h1>
    </header>

    <main>
        <form method="POST" action="public/processa.php">
            <label>Digite uma frase: </label>
            <input type="text" id="frase" name="frase" required>
            <button type="submit">Mostrar</button>
        </form>
    </main>

</body>
</html>