<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
</head>
<body>
        <main>
            <h1>Este é o resultado</h1>
            <p>

            <?php
            $n = $_GET["num"]  ?? 0;
            $a = $n - 1;
            $s = $n + 1;
            echo "O número escolhido foi $n";
            echo "<br>O seu antecessor é $a";
            echo "<br>O seu sucessor é $s";


            ?>
        </main>
    
</body>
</html>