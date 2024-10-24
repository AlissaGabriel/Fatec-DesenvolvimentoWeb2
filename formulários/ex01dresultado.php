<link rel="stylesheet" href="css/style.css">

<?php
if ($_GET) {
    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];
    $soma = $n1 + $n2;
    echo "<hr>";
    echo "<h1>Resultado do Exercício 1</h1>";
    echo "A soma de $n1 e $n2 é: $soma";
    echo "<a href='ex01d.php' class='button'>Retornar</a>";
}
?>

<a href='./index.php' id="index" class='button'>Index</a>