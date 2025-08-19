<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP</title>

    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header>
        <h1>Extraido criando um array: compact()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';

            // Declaração de variaveis individuais
            $nome = 'Maria';
            $idade = 50;
            $peso = 50.5;

            // A função compact() cria um array associativo com base nas variaveis informadas
            // As chaves do array serão os nomes das variaveis ('nome', 'idade', 'peso')
            // E os valores serão os valores dessas variaveis
            $array = campact('nome', 'idade', 'peso');

            // Exibe o array resultante no navegador, formatado para melhor visualização
            echo "<pre>";
                print_r($array); // Mostra o array: Array ( [nome] => Maria [idade] => 50 [peso] => 50.5 )
            echo "</pre>";
        ?>
    </main>
    
</body>

</html>