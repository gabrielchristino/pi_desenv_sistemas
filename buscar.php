<?php
echo '<a class="btnSair" href="?logout">sair</a>';
include('cabecalho.php');
?>
<h2>Buscar veículos</h2>
<div class="formularioPesquisa">
            <form  method="post">
                <input type="text" id="localizacao" name="localizacao" class="pesquisaCidade" placeholder="Qual Municipio-UF de retirada do veiculo?">
                <div class="botoesBuscar">
                    <button class="botaoInicial" type="submit" id="submitBuscaVeiculo" name="acao">
                        <img src="./images/botaocarro.svg" alt="">
                        <p>Busco Veículos para alugar</p>
                    </button>
                    <button class="botaoInicial" type="submit" id="submitBuscaVeiculo" name="acao">
                        <img src="./images/botaoanunciar.svg" alt="">
                        <p>Quero anunciar meu veículo para locação!</p>
                    </button>
                </div>
            </form>
        </div>
