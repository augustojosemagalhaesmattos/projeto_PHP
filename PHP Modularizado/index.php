<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <!-- Titilo da página -->
     <h1>Envie sua mensagem</h1>

     <!--
     Formulário para o usuario digitar e enviar dados.
     -method="POST" indica que os dados serão enviados "por trás" (sem aparecer na URL).
     -action="processa.php" diz que os dados serão enviados para a pagina chamada processa.
    -->
     <form method="POST" action= "processa.php">

     <!-- Texto explicado o que o usuario deve fazer -->
            <label>Digite sua mensagem:</label><br>

      <!--
            Campo de texto onde o usuario digita a mensagem.
            - name="mensagem" é o nome do campo, usado para recuperar o valor no PHP.
            - required significa que o campo é obrigatório.
       -->
            <input type="text" name="mensagem" required>

            <!-- Botão que envia o formulario -->
            <button type="submit">Enviar</button>
     </form>
    
</body>
</html>