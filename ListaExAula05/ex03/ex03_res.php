<link rel="stylesheet" href="./../style.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $num = (int)$_POST["num"];
    
    echo "<h1>Resultado do Exercício 3</h1>";
    if ($num % 2 == 0) {
        echo "<p class='resultado'> $num é número par </p><br>";
    } else {
        echo "<p class='resultado'> $num é número impar </p><br>";
    }
    echo "<a href='ex03.php' class='button'>Retornar</a>";
}