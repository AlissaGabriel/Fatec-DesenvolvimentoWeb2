<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Verificar se a palavra é Palíndromo</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>
    <h1>Exercício 05 - Verificar se a palavra é Palíndromo</h1>
    <form id="fex05" action="ex05_res.php" method="POST">
        <div class="conteudo">
            <label for="palavra">Palavra :</label>
            <input type="text" name="palavra" id="palavra" required>
        </div>
        <div class="botao">
            <button type="submit" id="calcular">Calcular</button>
            <button type="reset" id="limpar">Limpar</button>
        </div>
    </form>
</body>

</html>

<?php
echo "<a href='./../index.html' class='button'>Início</a>";
?>