<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <p>
        <?php
            function exibirFrase() {
                // Verifica se o formulário enviou a frase
                if (isset($_POST['frase'])) { 
                    $frase = strtolower($_POST['frase']); // Transforma tudo em minuscula
                    
                    // Inicializa contadores
                    $a = 0;
                    $e = 0;
                    $i = 0;
                    $o = 0;
                    $u = 0;

                    for ($j = 0; $j < strlen($frase);$j++) {
                        $letra = $frase[$j];

                         if ($letra == 'a') $a++;
                        elseif ($letra == 'e') $e++;
                        elseif ($letra == 'i') $i++;
                        elseif ($letra == 'o') $o++;
                        elseif ($letra == 'u') $u++;
                    }

                    // Exibe a mensagem
                    echo "A apareceu $a vez(es)<br>";
                    echo "E apareceu $e vez(es)<br>";
                    echo "I apareceu $i vez(es)<br>";
                    echo "O apareceu $o vez(es)<br>";
                    echo "U apareceu $u vez(es)<br>";


                    
                } else {
                        echo "Nenhuma frase foi recebida.";
                     }
            }
            exibirFrase();
        ?>
    </p>
</body>
</html>