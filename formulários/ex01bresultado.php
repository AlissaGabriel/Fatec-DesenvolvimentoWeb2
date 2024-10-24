<link rel="stylesheet" href="css/style.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = (int)$_POST["num1"];
    $n2 = (int)$_POST["num2"];
    $soma = $n1 + $n2;
    echo "<hr>";
    echo "<h1>Resultado do Exercício 1</h1>";
    echo "A soma de $n1 e $n2 é: $soma";
    echo "<a href='ex01b.php' class='button'>Retornar</a>";
}
?>

<a href='./index.php' id="index" class='button'>Index</a>