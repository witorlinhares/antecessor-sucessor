<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" href="assets/favicon.png" type="image/x-icon">
</head>

<body>
    <main>
        <h1>Este é o resultado:</h1>
        <p>

            <?php
            $n = $_REQUEST["num"]  ?? 0;
            $a = $n - 1;
            $s = $n + 1;
            echo "O número escolhido foi <strong>$n</strong>";
            echo "<br>O seu antecessor é <strong>$a</strong>";
            echo "<br>O seu sucessor é <strong>$s</strong>";


            ?>
        </p>
        <!-- <button onclick="javascript:history.go(-1)">Voltar</button> -->
    </main>

</body>

</html>