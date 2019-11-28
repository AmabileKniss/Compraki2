<?php

    require "CRUDgerente.php";
    $crud = new CRUDgerente();
    $users = $crud->mostraProdutos();

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
        <div class="ui pointing fixed hidden menu" style=" display: flex !important;background-color: #f4511e;">
        <a class="item" href="#">
            <p style="font-size: 20px; color: white;">Compraki</p>
        </a>
        <div id="menuzinho" class="right menu" style="padding-right: 40px; ">
            <a href="#" class="item" style="border-color: #f4511e;background-color: #f4511e;border-bottom: 1px solid #f4511e;border-right: 1px solid #f4511e;color: white;">
                Home
            </a>
            <a href="index.php?sessao=Login" class="item">
                Logout
            </a>

        </div> 
    </div>

<div style="background-color: #f4511e; color: white; margin-top: 2%;
    padding-top: 4%;margin-bottom: -1%;padding-bottom: 3%;">
    <h1 style="font-size: 73px;text-align: center; font-family:" Lucida Sans Unicode", "Lucida Grande",
     sans-serif;>GERENTE</h1>
    <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7;"></h3>
    <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>

</div>


</div>
</div>
        <table class="ui compact celled definition table">
            <thead>
            <tr>
                <th></th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preco</th>
                <th>Preco Unitário</th>
                <th>Quantidade Embalagem</th>
                <th>Categoria</th>


            </tr>
            </thead>
            <form method="post">
                <?php foreach ($users as $user): ?>
                <tbody>
                <tr>
                    <td class="collapsing">
                        <div class="ui buttons">
                            <button class="ui red button" value="<?= $user['cod_prod'] ?>"><a href="controlador.php?action=excluir&&cod_prod=<?= $user['cod_prod']?>" style="color: white;">Excluir</a></button>
                        </div>
                    </td>
                    <td><?= $user['nome'] ?></td>
                    <td><?= $user['desc_prod'] ?></td>
                    <td><?= $user['preco'] ?></td>
                    <td><?= $user['preco_unit'] ?></td>
                    <td><?= $user['qtd_emb'] ?></td>
                    <td><?= $user['categoria'] ?></td>

                </tr>

                </tbody>
    <?php endforeach; ?>
            </form>
        </table>
        <br>
<div style="margin-left: 2%">
    <a href="adcProdutos.php?action=cadastrar">
    <button class="ui green button"><i class=" plus icon"></i> Adicionar produto
    </button>
    </a>

</div>
<br>
</body>
</html>