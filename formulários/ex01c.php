<link rel="stylesheet" href="css/style.css">

<h1>Exercício 1 de PHP - Processamento Get na mesma página PHP.</h1>
<form action="#" method="GET">
    <input type="text" name="num1" placeholder="Número 1">
    <input type="text" name="num2" placeholder="Número 2">
    <button class="botao" type="submit">Enviar</button>
    <button class="botao" type="reset">Limpar</button>
</form>

<?php
if ($_GET) {
    if(!empty($_GET["num1"]) && !empty($_GET["num2"])){
    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];
    $soma = $n1 + $n2;
    echo "<hr>";
    echo "<h1>Resultado do Exercício 1</h1>";
    echo "A soma de $n1 e $n2 é: $soma";
    echo "<a href='ex01c.php' class='button'>Retornar</a>";
    }
}
?>

<a href='./index.php' id="index" class='button'>Index</a>