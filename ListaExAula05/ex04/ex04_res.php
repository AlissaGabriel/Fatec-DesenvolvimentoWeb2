<link rel="stylesheet" href="./../style.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST["string"];
    echo "<h1>Resultado do Exercício 4</h1>";
    echo "<p class='resultado'>O tamanho da string é de ", strlen($string), " caracteres", "<p><br>";
    echo "<a href='ex04.php' class='button'>Retornar</a>";
}