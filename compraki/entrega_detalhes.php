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
        <a class="item"
           style="border-color: #f4511e;background-color: #f4511e;border-bottom: 1px solid #f4511e;border-right: 1px solid #f4511e;color: white;">
            Home
        </a>
       
        <a href="pag_entregador.php" class="item" style="color: white">
           Entregas
        </a>
        <a href="Login.php?sessao=nao&&erro=nao" class="item" style="color: white">
            Logout
        </a>

    </div>
</div>

<div style="background-color: #f4511e; color: white;
    padding-top: 7%;margin-bottom: -1%;padding-bottom: 3%;">
    <h1 style="font-size: 73px;text-align: center; font-family:" Lucida Sans Unicode", "Lucida Grande",
    sans-serif;>Entregador</h1>
    <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7;"></h3>
    <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
</div>
&nbsp;
&nbsp;
&nbsp;

<h1 class="ui dividing header" style="font-size: 200%;margin-left: 4%;margin-right: 3%;margin-top: 4%;margin-bottom: 3%;">Detalhes do pedido</h1>

<div style="margin-bottom: 4%;">
    <div class="ui link cards" style="float: left;margin-left: 3%;margin-right: 2%;width: 22%;">
    <div class="card" style="width: 90%;margin-right: 4%;margin-left: 5%;margin-top: 4%;">
        <div class="image">
            <img src="img/user.png">
        </div>
    <div class="content">
      <div class="header">Pedrinho</div>
      <div class="meta">
        <a>Informações</a>
      </div>
      <div class="description" >
        <p style="font-weight: bolder; float: left;">Cidade:</p>Botafogo, SP
      </div>
      <div class="description">
        <p style="font-weight: bolder; float: left;">Endereço:</p> Rua XV de Novembro, 78
      </div>
      <div class="description">
        <p style="font-weight: bolder; float: left;">Telefone:</p> (47)98457-8395
      </div>
    </div>
    <div class="extra content">
      <span class="right floated">
        Usuário desde 2018
      </span>
      <span>
        75 Friends
      </span>
    </div>
  </div>
  </div>
   
  <div class="ui items" style="background:  #f1f1f1a1;margin-right: 3%;padding: 13px;width: 43%;float: left;margin-top: 0%;">

  <div class="item">
    <div class="ui small image">
      1
    </div>
    <div class="content">
      <div class="header">Omo Multicolor</div>
      <div class="meta">
        <span class="price">$21,90</span>
        <span class="stay">1x</span>
      </div>
      <div class="description">
        <p></p>
      </div>
    </div>
  </div>

  <div class="item">
    <div class="ui small image">
      2
    </div>
    <div class="content">
      <div class="header">Bom Bril Eco</div>
      <div class="meta">
        <span class="price">$7,99</span>
        <span class="stay">3x</span>
      </div>
      <div class="description">
        <p></p>
      </div>
    </div>
  </div>

  <div class="item">
    <div class="ui small image">
     3
    </div>
    <div class="content">
      <div class="header">Açucar Cristal</div>
      <div class="meta">
        <span class="price">$7,90</span>
        <span class="stay">1x</span>
      </div>
      <div class="description">
        <p></p>
      </div>
    </div>
  </div>
</div>
</div>


<div></div>

   
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14695.906976886314!2d-43.193672347187686!3d-22.951083571389184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997ff00f66426f%3A0x18c30eeac980d375!2sR.%20Volunt%C3%A1rios%20da%20P%C3%A1tria%2C%2065%20-%20Botafogo%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2022270-000!5e0!3m2!1spt-BR!2sbr!4v1573316167029!5m2!1spt-BR!2sbr" width="300" height="421" frameborder="400" style="border:0;" allowfullscreen=""></iframe>
    <button class="fluid ui button" style="margin-bottom: 7%;    background: #147ece;
    color: white;
    width: 31%;
    margin-left: 36%;
    margin-top: 4%; height: 10%;"><a href="pag_entregador.php" style="color: white;"> Produto Entregue</a></button>
</div>
</body>
</html>