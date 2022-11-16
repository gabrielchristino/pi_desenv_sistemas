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
<div class="telaVazia">
    Você achou uma tela nova, mas não há nada aqui por enquanto<br><br>
    Volte mais tarde :D
</div>
<?php
include('menu.php');
?>