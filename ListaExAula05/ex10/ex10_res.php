<link rel="stylesheet" href="./../style.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];
    echo "<h1>Resultado do Exercício 10</h1>";
    if (checkdate($mes, $dia, $ano)) {
        echo "<p class='conteudo'> A data ", $dia, "/", $mes, "/", $ano, " é uma data válida</p><br>";
    } else {
        echo "<p class='conteudo'> A data ", $dia, "/", $mes, "/", $ano, " é uma data inválida</p><br>";
    }

    echo "<a href='ex10.php' class='button'>Retornar</a><br>";
}
