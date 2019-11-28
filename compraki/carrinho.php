<?php

require "CRUDprodutos.php";
$cpf_usuario = $_GET['cpf'];
if($_GET['action'] == "verCarrinho"){
    $produtos = $crudProd->mostraCarrinho($cpf_usuario);

}

?>
<html>
<head>
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js"></script>
    <title>Compraki</title>
    <style>
        #menuzinho a:hover {
            background-color: #ff6a00;
        }

        body {

        }

        #imagem {
            background-image: url(data_bases/img/index.png);
            background-repeat: no-repeat;
        }

        h1 {
            font-weight: 100;
            line-height: 1.1;
        }
    </style>
</head>
<body>


<div class="pusher">


    <?php include "menuLogado.php"; ?>
</div>
<br>

<div class="ui last container">
    <div class="ui three steps">

        <div class="active step" style="background: #eaeaea;">
            <div class="content">
                <div class="title">Carrinho</div>
                <div class="description">Revise seus Produtos</div>
            </div>
        </div>


        <div class="step">
            <div class="content">
                <div class="title">Cadastrar Dados</div>
                <div class="description">Informaçoes de Entrega</div>
            </div>
        </div>

        <div class="step">
            <div class="content">
                <div class="title">Finalizar Compra</div>
                <div class="description">Revise suas Informações</div>
            </div>
        </div>
    </div>
</div>
<div>&nbsp;</div>
<div>&nbsp;</div>

<table class="ui table" style="padding-right: 20%; padding-left: 20%">
    <thead>
    <tr><th class="single line">Cod. Produto</th>
        <th>Nome Produto</th>
        <th>Preco Produto</th>


    </tr></thead>
    <tbody>
    <?php foreach($produtos as $produto): ?>
    <tr>
        <td>
            <h5 class="ui center aligned header"><?= $produto['cod_produto']?></h5>
        </td>
        <td class="single line">
            <?= $produto['nome_produto'] ?>
        </td>
        <td>
            <div class="ui star rating" data-rating="3" data-max-rating="3">R$<?= $produto['preco_produto'] ?></div>
        </td>

    </tr>
    <tr>
        <?php endforeach;?>
    </tbody>
    <tfoot>
    <tr><th colspan="5">
            <div class="ui left action input">
                <button class="ui teal labeled icon button" style="background-color: #147ece;
        margin-left: 142%;">
                    <i class="cart icon"></i>
                    Preço Total
                </button>
                <input type="text" value="R$350">
            </div>
        </th>
    </tr></tfoot>

</table>





<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<a href="cadastroDados.php">
    <button class="big ui button"
            style="background-color: #147ece; margin-left: 43%; margin-top: -2%; color: white;">
        Continuar sua compra
    </button>
</a>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>

</body>
</html>
