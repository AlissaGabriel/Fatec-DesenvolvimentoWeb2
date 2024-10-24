<link rel="stylesheet" href="./../style.css">

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano = $_POST["ano"];
    echo "<h1>Resultado do Exercício 8</h1>";
    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        echo "<p class='resultado'> $ano é um Ano Bissexto</p><br>";
    } else {
        echo "<p class='resultado'>$ano não é um Ano Bissexto</p><br>";
    }
    echo "<a href='ex08.php' class='button'>Retornar</a>";
}

//o ano deve ser divisivel por 4
//se o ano for divisivel por 100, ele nao é bissexto, a menos que
//seja divisivel por 400;