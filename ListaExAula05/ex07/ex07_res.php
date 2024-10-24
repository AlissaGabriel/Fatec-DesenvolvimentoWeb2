<link rel="stylesheet" href="./../style.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    echo "<h1>Resultado do Exercício 7</h1>";

    $arrayNumeros = explode(',', $num);

    $soma = array_sum($arrayNumeros);

    $quantidade = count($arrayNumeros);

    $media = 0;

    if ($quantidade > 0) {
        $media = $soma / $quantidade;
        echo "<p class='resultado'> A média dos números é ", number_format($media, 2), "</p><br>";
    }
    echo "<a href='ex07.php' class='button'>Retornar</a><br>";
}
