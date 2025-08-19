<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--
        A função shuffle() só funciona corretamente com arrays indexados (numericos).
        Quando voce usa shuffle() em um array associativo, o PHP:
        Descarta as chaves e Reorganiza apenas os valores, convertendo o array em um array
        indexado (com indices numericos de 0 em diante).
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP</title>

    <link rel="stylesheet" href="css/estiloc.css">
</head>

<body>
    <header>
        <h1>Embaralhando um array: shuffle()</h1>
    </header>
    <main>
        <?php
            echo '<hr>';

            echo '<h2> 1 - Extract </h2>';

            // Criação de um array associativo
            $array = [
                'nome' => 'Maria'
                'idade' => 40,
                'peso' => 50.5
            ];
            // Exibe o array original
            echo "<pre>";
            print_r($array);
            echo "</pre>";
            // 
    </main>
    
</body>
</html>