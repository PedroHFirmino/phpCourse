<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpCourse</title>
</head>
<body>
    <h1 container>
        <?php

        // Variável
            echo"Olá \u{1F30E}!";
            $nome = "Ferrari";
            $cor ="Amarela";
            $nº = "83";
            $campeonato = "Le Mans 24";
            $ano = "2025";

            echo"<p>A equipe campeã foi a $nome, da cor $cor, nº $nº, de $campeonato em 2025.</p>";

        // Data e Hora
            date_default_timezone_set(timezoneId: "America/Sao_Paulo");
            echo "A data de hoje é: ". date (format: "d/M/Y") . " Horário: " . date (format: "G:i:s");
            
        ?>
    </h1>
    
</body>
</html>
