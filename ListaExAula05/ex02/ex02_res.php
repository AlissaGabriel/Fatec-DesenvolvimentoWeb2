<link rel="stylesheet" href="./../style.css">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = (int)$_POST["num"];
    $quadrado = $num * $num;
    echo "<h1>Resultado do Exercício 2</h1>";
    echo "<p class='resultado'> O quadrado do número $num é $quadrado </p><br>";
    echo "<a href='ex02.php' class='button'>Retornar</a>";
}