<p>
    <?php
        // Inicio do código PHP

        // Verifica se existe uma mensagem enviada pelo formulário
        // A variável $_GET['mensagem'] pega o valor enviado  na URL
        if (isset($_GET['mensagem'])) {

            // Armazena o que foi digitado na variável $mensagem
            // A função htmlspecial() serve para proteger contra códigos
            // malificios (evita que alguém envie HTML ou JavaScript)
            $mensagem = htmlspecialchars($_GET['mensagem']);

            // Exibe na tela a mensagem digitada pelo usuário
            echo "Voce digitou: <strong>$mensagem</strong>";

        } else {
            // Se nenhuma mensagem foi enviada ainda, mostra essa frase padrão
            echo "Olá, mundo! Este é meu primeiro código em PHP.";
        }

        // Fim do código PHP
    ?>
</p>