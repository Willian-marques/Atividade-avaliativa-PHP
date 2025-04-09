<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>


</head>

<body>


    <h2>Olá, insira corretamente os dados abaixo para realizar o cadastro do aparelho:</h2>
    <form action="cadastro.php" method="post">

        <p>
            <label for="nome">Digite o nome do aparelho</label>
            <br>
            <input type="text" name="nome" placeholder="Nome">
        </p>

        <p>
            <label for="watts">Digite o consumo máximo em watts</label>
            <br>
            <input type="number" name="watts" placeholder="Watts">
        </p>

        <p>
            <label for="horas">Digite o número de horas que o aparelho é ligado por dia (somente horas inteiras)</label>
            <br>
            <input type="number" name="horas" placeholder="Horas">
        </p>

        <p>
            <label for="dias">Digite o número de dias que o aparelho ficará ligado no mês</label>
            <br>
            <input type="number" name="dias" placeholder="Dias">
        </p>


        <p>
            <label for="kwh">Digite o valor atual do kilowatt-hora (digite até com duas casas decimais)</label>
            <br>
            <input type="number" name="kwh" step=".01" placeholder="Kwh">
        </p>

        <button type="submit">Cadastrar</button>

    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['nome'])) {
            echo "Nome não pode estar em branco<br>";
        }
        if (empty($_POST['watts'])) {
            echo "Watts não pode estar em branco<br>";
        }
        if (empty($_POST['horas'])) {
            echo "Horas não pode estar em branco<br>";
        }
        if (empty($_POST['dias'])) {
            echo "Dias não pode estar em branco<br>";
        }
        if (empty($_POST['kwh'])) {
            echo "KwH não pode estar em branco<br>";
        }
    }
    ?>

</body>

</html>