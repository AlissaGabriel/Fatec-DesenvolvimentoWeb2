<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Data do Calendário</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>
    <h1>Exercício 10 - Data do Calendário</h1>
    <a href=></a>
    <form id="fex10" action="ex10_res.php" method="POST">
        <div class="conteudo">
            <label for="dia">Dia:</label>
            <input type="text" name="dia" id="dia" required>
            <label for="mes">Mês:</label>
            <input type="text" name="mes" id="mes" required>
            <label for="ano">Ano:</label>
            <input type="text" name="ano" id="ano" required>
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