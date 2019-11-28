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
    <a class="item" href="index.php">
        <p style="font-size: 20px; color: white;">Compraki</p>
    </a>
    <div id="menuzinho" class="right menu" style="padding-right: 40px; ">
        <a href="index.php" class="item" style="border-color: #f4511e;background-color: #f4511e;border-bottom: 1px solid #f4511e;border-right: 1px solid #f4511e;color: white;">
            Home
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
<div class="ui three item menu" style="background-color: #f4511e;
    font-size: 119%;">
    <a href="pedidos.php" class="item" style="color: white;">Pedidos</a>
    <a href="entregas.php" class="active item" style="color: white;">Entregas</a>
    <a href="gerente.php" class="item" style="color: white;">Produtos</a>
</div>
<div class="right menu">
    <div class="item">
        <div class="ui transparent inverted icon input">
            <i class="search icon"></i>
            <input type="text" placeholder="Pesquisar">
        </div>
    </div>
    <a class="item"></a>
</div>
</div>
</div>
<table class="ui compact celled definition table">
    <thead>
    <tr>
        <th></th>
        <th>Cod. Pedido</th>
        <th>CPF</th>
        <th>Endereço</th>
        <th>Cod. Produto</th>
        <th>Horário Entrega</th>
        <th>Preço Produto</th>


    </tr>
    </thead>
    <form method="post" action="">
        <tbody>
        <tr>
            <td class="collapsing">
                <div class="ui buttons">

                    <a href="controladorAdmin.php">
                        <button class="ui red button">Excluir</button>
                    </a>



                </div>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>

        </tbody>

    </form>
</table>
<br>


</div>
<br>
</body>
</html>