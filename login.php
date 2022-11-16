<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include('cabecalho.php');
        ?>
        <div class="formulario">
            <form  method="post">
                <input type="text" id="login" name="login" placeholder="E-mail">
                <input type="password" id="login" name="senha" placeholder="Senha" >
                <input type="submit" id="submit" name="acao" value="Acessar">
            </form>
            <a class="link-cadastro" href>Primeiro Acesso. Clique aqui para Criar uma conta</a>
        </div>
        <div class="rodape">
            <p class="rodape-p">BRASIL</p>
        </div>
    </body>
</html>
