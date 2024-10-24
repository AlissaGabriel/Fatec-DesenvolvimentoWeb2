<link rel="stylesheet" href="./../style.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = $_POST["palavra"];
    echo "<h1>Resultado do Exercício 5</h1>";
    $palavrainvertida = strrev($palavra);
    if ($palavra == $palavrainvertida) {
        echo "<p class='resultado'>A palavra $palavra é um palíndromo </p><br>";
    } else {
        echo "<p class='resultado'>A palavra $palavra não é um palíndromo </p><br>";
    }
    echo "<a href='ex05.php' class='button'>Retornar</a>";
}
