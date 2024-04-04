<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 02</title>
</head>

<body>
    <main>
        <h1>Trabalhando com números aleatórios </h1>
        <p> Gerando um número aleatório entre 0 e 100...</p>
        <p>O valor gerado foi <strong><?php gerarNumeroAleatorio() ?></strong></p>
        <button onclick='window.location.reload();'> Gerar Outro</button>
    </main>
</body>

</html>

<?php
function gerarNumeroAleatorio()
{
    $numero = (rand(0, 100));
    echo $numero;
}
?>