<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado Tabuada</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    // Função para exibir a tabuada de um número
    function exibirTabuada($numero) {
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    }

    // Entrada de dados
    $numero = $_POST['numero']; // Pega o valor que o usuário digitou no index.php (no <input name="numero">) e guarda na variável $numero.
    
    // Condicional para validar entrada
    if($numero > 0) {
        echo "<strong> Tabuada do $numero</strong><br>";
        exibirTabuada($numero);
    } else {
        echo "Digite um numero valido.";
    }

     echo "<br><a href='../index.php'>Voltar</a>";
    ?>

</body>
</html>