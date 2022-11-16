<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículo Fácil 123</title>
</head>

<?php
echo '<a class="btnSair" href="/logout.php">sair</a>';
include('cabecalho.php');
echo '<h4 class="cabecalhoHome">Bem vindo ' . $_SESSION['login'] . '</h4>';
?>
<div class="botoesInicial">
    <button class="botaoInicial" onclick="location.href='/buscar.php'">
        <img src="./images/botaolupa.svg" alt="">
        <p>Busco Veículos para alugar</p>
    </button>
    <button class="botaoInicial" onclick="location.href='/error404.php'">
        <img src="./images/botaoanunciar.svg" alt="">
        <p>Quero anunciar meu veículo para locação!</p>
    </button>
</div>

<?php
include('menu.php');
?>