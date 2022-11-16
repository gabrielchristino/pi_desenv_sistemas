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
echo '<a class="btnSair" href="/logout">sair</a>';
include('cabecalho.php');
?>
<h2>Buscar veículos</h2>
<div class="formularioPesquisa">
            <form  method="post">
            <div class="caixaPesquisa">
            <input type="text" id="localizacao" name="localizacao" class="pesquisaCidade" placeholder="Qual Municipio-UF de retirada do veiculo?">
            <img src="./images/iconepesquisa.svg" alt="">
            </div>
            <div class="botoesBuscar">
                    <button class="botaoInicial" type="submit" id="submitBuscaVeiculo" name="BuscarVeiculo" onclick="alert('Pesquisando um veículo...')">
                        <img src="./images/botaocarro.svg" alt="">
                        <p>Carros e Utilitários</p>
                    </button>
                    <button class="botaoInicial" type="submit" id="submitBuscaVeiculo" name="BuscarVeiculo" onclick="alert('Pesquisando um veículo...')">
                        <img src="./images/botaomoto.svg" alt="">
                        <p>Motos</p>
                    </button>
                </div>
            </form>
        </div>
<?php
include('menu.php');
?>