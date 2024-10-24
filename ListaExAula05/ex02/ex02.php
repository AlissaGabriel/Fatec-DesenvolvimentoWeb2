<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Quadrado do número digitado</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>
    <h1>Exercício 02 - Quadrado do número digitado</h1>
    <form id="fex02" action="ex02_res.php" method="POST">
        <div class="conteudo">
            <label for="num">Número :</label>
            <input type="number" name="num" id="num" required>
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