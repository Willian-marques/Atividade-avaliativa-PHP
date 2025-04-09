<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>



    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $watts = $_POST['watts'];
        $horas = $_POST['horas'];
        $dias = $_POST['dias'];
        $kwh = $_POST['kwh'];

        echo "Nome do aparelho: " . $nome . "<br>";
        echo "Consumo máximo em watts: " . $watts . " Watts" . "<br>";
        echo "Horas que o aparelho é usado por dia: " . $horas . " Horas" . "<br>";
        echo "Dias que o aperlho é usado por mês: " . $dias . " Dias" . "<br>";
        echo "Preço atual do Kwh: " . $kwh . " Kwh" . "<br>";

        echo "<br>";
        echo "<br>";

        $consumoDiario = ($watts / 1000) * $horas;
        $consumoMensal = $consumoDiario * $dias;
        $consumoReais = $consumoMensal * $kwh;
        echo "Consumo diário do aparelho em Kwh: " . $consumoDiario . " Kwh" . "<br>";
        echo "Consumo mensal do aparelho em Kwh: " . $consumoMensal . " Kwh" . "<br>";
        echo "Consumo do aparelho em R$: " . $consumoReais . "<br>";

        echo "<br>";
        echo "<br>";

        if ($consumoMensal <= 5) {
            echo "<div class='baixa'>Sua categoria de consumo foi Baixa.</div>";
        } else if ($consumoMensal >= 6 && $consumoMensal <= 10) {
            echo "<div class='moderada'>Sua categoria de consumo foi Moderada.</div>";
        } else if ($consumoMensal > 10) {
            echo "<div class='elevada'>Sua categoria de consumo foi Elevada.</div>";
        }
    }
    ?>


    <p><a href="index.php">Voltar para Home</a></p>

</body>

</html>