<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08 - Verificar se o ano é bissexto</title>
    <link rel="stylesheet" href="./../style.css">
</head>

<body>
    <h1>Exercício 08 - Verificar se o ano é bissexto</h1>
    <form id="fex08" action="ex08_res.php" method="POST">
        <div class="conteudo">
            <label for="ano">Ano :</label>
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