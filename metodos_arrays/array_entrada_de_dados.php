<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> <!-- Define a condicação dos caracteres para suportar acentuação -->
    <title>Cadastro de Alunos</title> <!-- Titulo que aparece na aba do navegador -->
    <style>
        /* Define a fonte e o espaçamento do corpo da página */
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        /* Estiliza os campos de texto e números para ficarem mais legiveis */
        input[type="text"], input[type="number"] {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            max-width: 300px; /* limita o tamanho maximo do campo */
        }
        /* Estiliza o botão de enviar (submit) */
        input[type="submit"] {
            padding: 10px 20px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <h1>Cadastro de Aluno</h1> <!-- Titulo principal da pagina -->

    <!-- Formulario que envia os dados para esta mesma pagina via metodo POST -->
    <form method="POST">
        <label>Nome do Aluno:</label><br>
        <!-- Campo para digitar o nome, obrigatorio (required) -->
        <input type="text" name="name" required><br>

        <label>Nota 1:</label><br>
        <!-- Campo para digitar a nota 1  aceita numeros decimais, obrigatório -->
        <input type="number" name=nota1 step="0.01" required><br>

        <label>Nota 2:</label>
    
    </form>
    
</body>
</html>