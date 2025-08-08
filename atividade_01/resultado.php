<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Processando Mensagem</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <!-- Titulo da pagina -->
     <header>
        <h1>Resultado:</h1>
     </header>

     <p class = "caixa">
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $valor1 = $_POST['valor1'];
                $valor2 = $_POST['valor2'];
                $operacao = $_POST['operacao'];
                $resultado = 0;

                if ($operacao == '+') {
                    $resultado = $valor1 + $valor2;
                } elseif ($operacao == '-') {
                    $resultado = $valor1 - $valor2;
                } elseif ($operacao == '*') {
                    $resultado = $valor1 * $valor2; 
                } elseif ($operacao == '÷') {
                    if ($valor2 != 0) {
                        $resultado = $valor1 / $valor2;
                    } else {
                        $resultado = "Erro: Divisão por zero não é permitida.";
                    }
                } else {
                    $resultado = 'Operação inválida';
                }
            }
            echo "O resultado de <strong>$valor1 $operacao $valor2 = $resultado </strong>";
        ?>
         <a href="index.php">Fazer outro cálculo</a>
    </p>

    
</body>
</html>