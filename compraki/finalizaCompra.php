<?php
    require "CRUDCompra.php";
    $cd_cpf = $_GET['cpf'];
    if($_GET['action'] == "mostra") {
        $produto = $crud->mostrarDados($cd_cpf);
    }else{
        true;
    }
    ?>
<html>
<head>
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js"></script>
    <title >Compraki</title>
    <style>
        #menuzinho a:hover{
            background-color: #ff6a00;
        }
        body{
        ;
        }
        h1{
            font-weight: 100;
            line-height: 1.1;
        }
    </style>
</head>
<body>
<!-- Page Contents -->
<br><br>
<div class="pusher" >
    <?php require "menuLogado.php" ?>

    <div class="ui last container">
        <div class="ui three steps">

            <div class="step">
                <a href="carrinho.php">
                    <div class="content">
                        <div class="title">Carrinho</div>
                        <div class="description">Revise seus Produtos</div>
                    </div>
                </a>
            </div>

            <div class="step">
                <a href="CadastroDados.php">
                    <div class="content">
                        <a href="cadastroDados.php"><div class="title">Cadastrar Dados</div></a>
                        <div class="description">Informaçoes de Entrega</div>
                    </div>
                </a>
            </div>
            <div class="active step">
                <a href="finalizaCompra.php">
                    <div class="content">
                        <div class="title">Finalizar Compra</div>
                        <div class="description">Revise suas Informações</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <form class="ui form" style="margin-top: 2%;margin-left: 17%;width: 65%;background-color: #e0e0e0;padding-left: 1%;
  padding-top: 1%;
  padding-right: 1%;
  padding-bottom: 1%;
  margin-bottom: 5%;">
    <?php foreach ($produto as $item):?>
        <h4 class="ui dividing header">Informações da Entrega</h4>
        <div class="three fields">
            <div class="field">
                <label>Nome</label>
                <i><?=$item['nome'] ?></i>
            </div>
            <div class="field">
                <label>Sobrenome</label>
                <i><?=$item['sobrenome'] ?></i>
            </div>
            <div class="field">
                <label>CPF</label>
                <i><?=$item['cd_cpf'] ?></i>
            </div>
        </div>

        <div class="two fields">
            <div class="field">
                <label>Endereço de Cobrança</label>
                <i><?=$item['endereco'] ?><i>,</i></i>
            </div>
            <div class="field">
                <label>Número</label>
                <i><?=$item['numero'] ?></i>
            </div>
        </div>
        <div class="two fields">
            <div class="field">
                <label>Estado</label>
                <i><?=$item['estado'] ?><i>,</i></i>
            </div>
            <div class="field">
                <label>País</label>
                <i>Brasil</i>
            </div>
        </div>
        <h4 class="ui dividing header">Informações de pagamento</h4>
        <div class="field">
            <label>Bandeira do Cartão</label>
            <i><?=$item['bandeiraCartao'] ?></i>
        </div>
        <div class="four fields">
            <div class="field">
                <label>Número do Cartão</label>
                <i><?=$item['numeroCartao'] ?></i>
            </div>
            <div class="field">
                <label>CVC</label>
                <i><?=$item['cvc'] ?></i>
            </div>
            <div class="field">
                <label>Expira em:</label>
                <i><?=$item['mesVencimento'] ?></i>
            </div>
            <div class="field">
                <label>Ano de Vencimento</label>
                <i><?=$item['anoVencimento'] ?></i>
            </div>
        </div>
    <?php endforeach; ?>
        <h4>Horário de Entrega</h4>
        <?= $item['horarioEntrega'] ?>
        <div>
            <a href="index.php?sessao=logado&&cpf=<?= $cd_cpf ?>&&alert=sim">
                <div class="ui button" tabindex="0" style="color: #ffffff;margin-top: 2%;margin-left: 36%;background-color: #147ece;width: 28%;padding: 2%;">Enviar pedido</div>
            </a>
        </div>

    </form>


</body>
</html>