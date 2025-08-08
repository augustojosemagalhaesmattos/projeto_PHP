<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Formulario</title>
</head>
<body>

    
    <header>
        <h1>Calculadora: Operadores Aritméticos</h1>
    </header>


    <main>
        <div class="caixa">
            <form id="meuFormulario" method="POST" action="resultado.php">

                <section class="caixa1">
                        <label>Digite o primeiro número: </label><br>
                        <input type="text" id="numero1" name="valor1" required><br>
                </section>

                <section class="caixa2">
                        <label>Digite o segundo número: </label><br>
                        <input type="text" id="numero2" name="valor2" required><br>
                </section>

                <section class="operacoes">
                        <label>Escolha a operação: </label><br>
                        <select id= "opcoes" name="operacao" equired>
                            <option value="">--Selecione--</option>
                            <option value="+">Adição (+)</option>
                            <option value="-">Subtração (-)</option>
                            <option value="*">Multiplicação (x)</option>
                            <option value="÷">Divisão (÷)</option>
                        </select>
                </section>
                <button type="submit" id="btnCalcular">Calcular</button>
            </form>   
        </div>
    </main>

    
</body>
</html>