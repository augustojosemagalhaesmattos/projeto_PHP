<?php
// Pega o número que o usuário digitou no formulário (index.php)
$primos = (int) $_POST['primos'];

// Função que verifica se um número é primo
function ehPrimo($n) {
    // Todo número menor que 2 não é primo
    if ($n < 2) return false;
    
    // Testa divisores de 2 até a raiz quadrada do número
    for ($i = 2; $i <= sqrt($n); $i++) {
        // Se encontrar algum divisor exato, não é primo
        if ($n % $i == 0) {
            return false;
        }
    }
    // Se não encontrou divisor, então é primo
    return true;
}

// Exibe título na tela mostrando até qual número vamos gerar
echo "<h1>Números primos até $primos:</h1>";

// Percorre todos os números de 1 até o limite
for ($num = 1; $num <= $primos; $num++) {
    // Só mostra o número se for primo (usando a função criada)
    if (ehPrimo($num)) {
        echo $num . " ";
    }
}

// Adiciona um link para voltar ao formulário (index.php)
echo "<br><br><a href='../index.php'>Gerar novamente</a>";
?>
