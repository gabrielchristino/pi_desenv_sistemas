
        <?php
            include('cabecalho.php');
        ?>
<?php
echo '<h2>Bem vindo ' . $_SESSION['login'] . '</h2>';
echo '<a href="?logout">Sair!</a>';
?>