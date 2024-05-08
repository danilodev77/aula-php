<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Programa</title>
</head>
<body>
    <h1>Isso é HTML</h1>
    <?php
        $dia = "Terça";
        $temperatura = 24;
        if ($temperatura > 25) {
            $clima = "Quente";

        } else if ($temperatura <= 25 && 18) {

            $clima = "Chuvoso";
        } else {
            $clima = "Frio";
        };

        echo "O tempo hoje está $clima. A temperatura está de $temperatura e o dia hoje é $dia-Feira.";

        $nomes = array("Isabela Rodrigues", "Joran Manoel", "Danilo Freitas", "Brenno Lee");

        echo "<br>";
        
        for($i=0; $i < 4; $i++){
            echo "<br>";
            echo $nomes[$i];
        };
        echo "<br>";
        foreach ($nomes as $nome)

    ?>
</body>
</html>