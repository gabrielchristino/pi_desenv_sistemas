<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículo Fácil 123</title>
</head>

<body>

    <?php
    if (!isset($_SESSION['login'])) {
        if (isset($_POST['acao'])) {
            $login = 'usuario@gmail.com';
            $senha = '12345';

            $loginFormulario = $_POST['login'];
            $senhaFormulario = $_POST['senha'];

            if ($login == $loginFormulario && $senha == $senhaFormulario) {
                $_SESSION['login'] = $login;
                header('Location: index.php');
            } else {
                echo 'Sem cadastro';
            }
        }

        include('login.php');
    } else {
        if ($_SERVER['REQUEST_URI'] == '/logout') {
            unset($_SESSION['login']);
            session_destroy();
            header('Location: index.php');
        } else
        if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php' || $_SERVER['REQUEST_URI'] == '/index') {
            header('Location: home.php');
        }
    }
    ?>
</body>

</html>