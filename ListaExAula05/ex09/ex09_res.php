<link rel="stylesheet" href="./../style.css">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palavra = $_POST["palavras"];
    echo "<h1>Resultado do Exercício 9</h1>";

    $entrada = trim($_POST['palavras']);

    $palavras = preg_split('/\s+/', $entrada);

    $contagem = array_count_values($palavras);
    $soma = 0;

    foreach ($contagem as $palavra => $quantidade) {

        $soma += $quantidade;
        
        echo "<p class='resultado'> A palavra <strong>$palavra</strong> tem ", strlen($palavra), " caracteres </p><br><br>";
    }
    echo "<p class='resultado'> Foram digitadas $soma palavras </p><br>";
    echo "<a href='ex09.php' class='button'>Retornar</a><br>";
}
