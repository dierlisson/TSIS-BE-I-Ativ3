<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2 - Criando primeira página em PHP </title>
</head>

<body>
    <?php

    $datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
    $hora = $datetime->format('H');
    // Colocando a hora "na unha" para testar
    //$hora = 10; 

    /**Bom Dia */
    if ($hora >= 0 && $hora <= 12) {
        echo "<h1>Bom dia!</h1><br>", "<img src = './assets/images/bomDia.jpg'/>";
    }
    /**Boa tarde */
    elseif ($hora > 12 && $hora < 18) {
        echo "<h1>Boa tarde!</h1><br>", "<img src = './assets/images/boaTarde.jpg'/>";
    }
    /**Boa noite */
    elseif ($hora >= 18 && $hora <= 23) {
        echo "<h1>Boa noite!</h1? <br> <br>", "<img src = './assets/images/boaNoite.jpg'/>";
    }
    /** Error */
    else {
        echo "<h2>Sua hora está errada, portanto: Bom dia, boa tarde e boa noite!</h2><br>";
        echo "<img src = 'https://httpstatusdogs.com/img/404.jpg'/>";
    }
    ?>
</body>

</html>