<link rel="stylesheet" href="css/style.css">

<h1>Exercício 1 de PHP - Processamento Post na mesma página PHP.</h1>
<form action="#" method="POST">
    <input type="text" name="num1" placeholder="Número 1">
    <input type="text" name="num2" placeholder="Número 2">
    <button class="botao" type="submit">Enviar</button>
    <button class="botao" type="reset">Limpar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = (int)$_POST["num1"];
    $n2 = (int)$_POST["num2"];
    $soma = $n1 + $n2;
    echo "<hr>";
    echo "<h1>Resultado do Exercício 1</h1>";
    echo "A soma de $n1 e $n2 é: $soma";
    echo "<a href='ex01.php' class='button'>Retornar</a>";
}
?>

<a href='./index.php' id="index" class='button'>Index</a>