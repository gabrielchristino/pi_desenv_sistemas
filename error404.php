<?php
echo '<a class="btnSair" href="/logout">sair</a>';
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