<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Tamanho da string</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>
    <h1>Exercício 04 - Tamanho da string</h1>
    <form id="fex04" action="ex04_res.php" method="POST">
        <div class="conteudo">
            <label for="string">Palavra :</label>
            <input type="text" name="string" id="string" required>
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