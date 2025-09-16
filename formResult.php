<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpCourse</title>
</head>
<body>
    <header>
        <h1> Resultado do Form</h1>
    </header>
    <main>
        <?php
            $nome = $_GET ["nome"] ?? "null";
            $sobrenome = $_GET ["sobrenome"] ?? "null";
            echo "Olá $nome $sobrenome, seja bem-vindo(a)."
        ?>
    </main>
    
</body>
</html>
