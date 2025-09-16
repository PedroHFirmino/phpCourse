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
            echo"Hello \u{1F30E}!";
            $name = "Ferrari";
            $color ="Yellow";
            $nº = "83";
            $championship = "Le Mans 24";
            $year = "2025";

            echo"<p>The champion team was $name, $color, nº $nº, of $championship in 2025.</p>";

        // Data e Hora
            date_default_timezone_set(timezoneId: "America/Sao_Paulo");
            echo "Today is: ". date (format: "d/M/Y") . " Hour: " . date (format: "G:i:s");
            
        ?>
    </h1>
    
</body>
</html>
