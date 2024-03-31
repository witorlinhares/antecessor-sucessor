<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="index.html">
    <link rel="icon" href="assets/favicon.png" type="image/x-icon">
</head>

<body>
    <main class="general">
        <div class="container-response">
            <h1 class="title-response" >Este é o resultado:</h1>
            <div class="div-paragraph">
                <p class="paragraph">
                    <?php
                    $n = $_REQUEST["num"]; /*número escolhido*/
                    $a = $n - 1; /*Antecessor*/
                    $s = $n + 1; /*Sucessor*/
                    echo "O número escolhido foi <strong>$n</strong>";
                    echo "<br>O seu antecessor é <strong>$a</strong>";
                    echo "<br>O seu sucessor é <strong>$s</strong>";
                    ?>
                </p>
            </div>
        </div>
    </main>
</body>
</html>

<!-- Desenvolvido por Witor Linhares -->