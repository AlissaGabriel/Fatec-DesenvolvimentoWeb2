<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Soma de dois números</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>
    <h1>Exercício 01 - Soma de dois números</h1>
    <form id="fex01" action="" method="GET">
        <div class="conteudo">
            <label for="num1">Número 1:</label>
            <input type="number" name="num1" id="num1" required>
            <label for="num2">Número 2:</label>
            <input type="number" name="num2" id="num2" required>
        </div>
        <div class="botao">
            <button type="submit" id="calcular">Calcular</button>
            <button type="reset" id="limpar">Limpar</button>
        </div>
    </form>
</body>

</html>

<?php

if ($_GET) {
    if (!empty($_GET["num1"]) && !empty($_GET["num2"])) {
        $n1 = $_GET["num1"];
        $n2 = $_GET["num2"];
        $soma = $n1 + $n2;
        echo "<hr>";
        echo "<h1>Resultado do Exercício 1</h1>";
        echo "<p class='resultado'>A soma de $n1 + $n2 é: $soma </p>";
        echo "<a href='ex01.php' class='button'>Retornar</a>";
    }
}

echo "<a href='./../index.html' class='button'>Início</a>";
?>