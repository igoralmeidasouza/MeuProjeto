<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função GET</title>
</head>

<body>
    <?php

        echo "<h2>Recuperando os dados</h2>";

        echo "Nome: ".$_GET['nome'];
        echo "<br><br>";

        echo "Sobrenome: ".$_GET['sobrenome'];
        echo "<br><br>";

        echo "E-mail: ".$_GET['email'];
        echo "<br><br>";

        echo "Senha: ".$_GET['senha'];
        echo "<br><br>";

        echo "Formação: ".$_GET['formacao'];
    
    ?>

</body>
</html>