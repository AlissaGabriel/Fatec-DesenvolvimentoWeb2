<link rel="stylesheet" href="./../style.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    echo "<h1>Resultado do Exercício 6</h1>";

    function fatorial($num){
        $resultado = 1;
        for ($i = 1; $i <= $num; $i++) {
            $resultado *= $i;
        }

        return $resultado;
    }

    echo "<p class='conteudo'> O fatorial do número $num é ", fatorial($num), "</p><br>";

    echo "<a href='ex06.php' class='button'>Retornar</a><br>";
}