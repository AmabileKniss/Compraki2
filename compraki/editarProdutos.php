<?php
require "CRUDgerente.php";
$produto = $crud->mostraProdutoEditar($_GET['id']);
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
<?php require "menuGerente.php" ?>

<div style="background-color: #f4511e; color: white;

    padding-top: -4%;margin-bottom: -1%;padding-bottom: 3%;">
    <h1 style="font-size: 73px;text-align: center; font-family:" Lucida Sans Unicode", "Lucida Grande",
    sans-serif;>Editar Produto</h1>
    <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7;"></h3>
    <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
</div>
<form class="ui form" method="post" action="CRUDgerente.php"
      style="align-items: center; margin-left: 15%; margin-right: 15%">
    <br>
    <?php foreach ($produto as $item): ?>
        <div class="field">
            <label>Nome</label>
            <div class="one fields">
                <div class="field">
                    <input type="text" name="nome" id="nome" placeholder="<?= $item['nome'] ?>">
                </div>
            </div>
        </div>
        <div class="field">
            <label>Descrição do Produto</label>
            <div class="fields">
                <div class="twelve wide field">
                    <input type="text" name="desc_prod" id="desc_prod" placeholder="<?= $item['desc_prod'] ?>">
                </div>
                <div class="four wide field">
                    <input type="text" name="preco" id="preco" placeholder="R$<?= $item['preco'] ?>">
                </div>
            </div>
        </div>

        <div class="fields">
            <div class="seven wide field">
                <label>Quantidade na Embalagem</label>
                <input type="text" name="qtd_emb" id="qtd_emb" maxlength="5" placeholder="<?= $item['qtd_emb'] ?>">
            </div>
            <div class="three wide field">
                <label>Preço Unitário</label>
                <input type="text" name="preco_unit" id="preco_unit" maxlength="3"
                       placeholder="<?= $item['preco_unit'] ?>">
            </div>
        </div>
        <h4 class="ui dividing header">Categoria do Produto</h4>
        <div class="ui form">
            <div class="field">
                <label>Categoria</label>
                <select id="categoria" name="categoria">
                    <option value="<?= $item['categoria'] ?>"><?= $item['categoria'] ?></option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Comidas">Comidas</option>
                    <option value="Açougue">Açougue</option>
                    <option value="Higiêne">Higiêne</option>
                    <option value="Verdureira">Verdureira</option>
                </select>
            </div>
        </div>
        <br>
        <input type="submit" class="ui submit button">

    <?php endforeach; ?>
</form>