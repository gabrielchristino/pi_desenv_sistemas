<?php
echo '<a class="btnSair" href="?logout">sair</a>';
include('cabecalho.php');
?>
<h2>Buscar veículos</h2>
<div class="formularioPesquisa">
            <form  method="post">
            <div class="caixaPesquisa">
            <input type="text" id="localizacao" name="localizacao" class="pesquisaCidade" placeholder="Qual Municipio-UF de retirada do veiculo?">
            <img src="./iconepesquisa.svg" alt="">
            </div>
            <div class="botoesBuscar">
                    <button class="botaoInicial" type="submit" id="submitBuscaVeiculo" name="BuscarVeiculo" onclick="alert('Pesquisando um veículo...')">
                        <img src="./botaocarro.svg" alt="">
                        <p>Carros e Utilitários</p>
                    </button>
                    <button class="botaoInicial" type="submit" id="submitBuscaVeiculo" name="BuscarVeiculo" onclick="alert('Pesquisando um veículo...')">
                        <img src="./botaomoto.svg" alt="">
                        <p>Motos</p>
                    </button>
                </div>
            </form>
        </div>
