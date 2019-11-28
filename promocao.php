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

            }
            #imagem{
                background-image: url(data_bases/img/index.png);
                background-repeat: no-repeat;
            }
            h1{
                font-weight: 100;
                line-height: 1.1;
            }
        </style>
    </head>
<body>
  <?php require"menuLogado.php" ?>

    <div style="background-color: #f4511e; color: white;
    padding-top: 4%;">
    <h1 style="font-size: 73px;text-align: center; font-family:"Lucida Sans Unicode", "Lucida Grande", "sans-serif";>PROMOÇÕES</h1>
        <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7; margin-bottom: 4%;"></h3>
        <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
    </div>
    <div class="ui fluid three item menu" style="margin-top: 0%;">
        <a href="index.php" class="item" style="padding: 1%;font-size: 121%;">Página Inicial</a>
        <a href="top.php" class="item" style="padding: 1%;font-size: 121%;">TOP Ofertas</a>
        <a href="produto.php?categoria=todos" class="item active" style="padding: 1%;font-size: 121%;">Todos os Produtos</a>
</div>
    <br>
    <br><br><br><br>
</body>
</html>