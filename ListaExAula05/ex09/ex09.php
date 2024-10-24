<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09 - Contagem de Palavras</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>
    <h1>Exercício 09 - Contagem de Palavras</h1>
    <form id="fex09" action="ex09_res.php" method="POST">
        <div class="conteudo">
            <label for="palavras">Palavras:</label>
            <input type="text" name="palavras" id="palavras" required>
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