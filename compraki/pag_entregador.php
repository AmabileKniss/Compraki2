<?php 
 require "CRUDentrega.php";
 $pedidos = $crudEntrega->abrirEntregas();

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

<div style="background-color: #f4511e; color: white; margin-top: 2%;
    padding-top: 7%;margin-bottom: -1%;padding-bottom: 3%;">
    <h1 style="font-size: 73px;text-align: center; font-family:" Lucida Sans Unicode", "Lucida Grande",
    sans-serif;>Entregador</h1>
    <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7;"></h3>
    <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
</div>
&nbsp;
&nbsp;
&nbsp;

<h1 class="ui dividing header" style="font-size: 200%;margin-left: 4%;margin-right: 3%;margin-top: 6%;">Pedidos para entrega</h1>
<table class="ui compact celled definition table" style="width: 93%;
    margin-left: 4%;
    margin-top: 3%;
    margin-bottom: 9%">

  <thead>
    <tr>
      <th>Entregue</th>
      <th style="text-align: center;">Name</th>
      <th style="text-align: center;">Endereço</th>
      <th style="text-align: center;">E-mail address</th>
      <th style="width: 12%;text-align: center;">Detalhes</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($pedidos as $ped): ?>
    <tr>
      <td class="collapsing" style="width: 7%;background: #e2e2e2;">
        <div class="ui fitted toggle checkbox">
            <input type="checkbox">
            <label></label>
        </div>
      </td>
    <td>
        
        <div class="content">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    <?= $ped['cpf_usuario'] ?>
                </font>
            </font>
        </div>
    </td>
    <td style="text-align: center;"><?= $ped['nome_produto'] ?></td>
    <td style="text-align: center;">jhlilk22@yahoo.com</td>
    <td>
        <a href="entrega_detalhes.php"><div class="ui small primary button">
        Abrir pedido
        </div></a>
    </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>


<h1 class="ui dividing header" style="font-size: 200%;margin-left: 4%;margin-right: 3%;margin-top: 6%;">Pedidos Entregues</h1>
<table class="ui compact celled definition table" style="width: 93%;
    margin-left: 4%;
    margin-top: 3%;
    margin-bottom: 9%">

  <thead>
    <tr>
      <th>Entregue</th>
      <th style="text-align: center;">Name</th>
      <th style="text-align: center;">Endereço</th>
      <th style="text-align: center;">E-mail address</th>
      <th style="width: 12%;text-align: center;">Detalhes</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td class="collapsing" style="width: 7%;background: #e2e2e2;">
        <div class="ui fitted toggle checkbox">
            <input type="checkbox" checked="checked" disabled="disabled">
            <label></label>
        </div>
      </td>
    <td>
            <div class="content">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    Lindsay
                </font>
            </font>
        </div>
    </td>
    <td style="text-align: center;">Rua XV de Novembro, 78</td>
    <td style="text-align: center;">jhlilk22@yahoo.com</td>
    <td>
        <a href="entrega_detalhes.php"><div class="ui small primary button">
        Abrir pedido
        </div></a>
    </td>
    </tr>

    <tr>
      <td class="collapsing" style="width: 7%;background: #e2e2e2;">
        <div class="ui fitted toggle checkbox">
            <input type="checkbox" checked="checked" disabled="disabled">
            <label></label>
        </div>
      </td>
      <td>
          <div class="content">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    Mateus Abreu
                </font>
            </font>
        </div>
      </td>
      <td style="text-align: center;">Rua José Carlos, 10</td>
      <td style="text-align: center;">matteewaringonton@yahoo.com</td>
      <td><div class="ui small primary button">
        Abrir pedido
        </div></td>
    </tr>

    <tr>
       <td class="collapsing" style="width: 7%;background: #e2e2e2;">
        <div class="ui fitted toggle checkbox">
            <input type="checkbox" checked="checked" disabled="disabled">
            <label></label>
        </div>
      </td>
      <td>
          <div class="content">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    Caroline da Silva
                </font>
            </font>
        </div>
      </td>
      <td style="text-align: center;">Rua das Palmeiras, 113</td>
      <td style="text-align: center;">linecarol22@yahoo.com</td>
      <td><div class="ui small primary button">
        Abrir pedido
        </div></td>
    </tr>

       <tr>
      <td class="collapsing" style="width: 7%;background: #e2e2e2;">
        <div class="ui fitted toggle checkbox">
            <input type="checkbox" checked="checked" disabled="disabled">
            <label></label>
        </div>
      </td>
      <td>
          <div class="content">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    Amanda Oliveira
                </font>
            </font>
        </div>
      </td>
      <td style="text-align: center;">Rua Visconty Trass, 90</td>
      <td style="text-align: center;">oliveamand83@yahoo.com</td>
      <td><div class="ui small primary button">
        Abrir pedido
        </div></td>
    </tr>

           <tr>
      <td class="collapsing" style="width: 7%;background: #e2e2e2;">
        <div class="ui fitted toggle checkbox">
            <input type="checkbox" checked="checked" disabled="disabled">
            <label></label>
        </div>
      </td>
      <td>
          <div class="content">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    Leticia Doffman
                </font>
            </font>
        </div>
      </td>
      <td style="text-align: center;">Rua Nereu Ramos, 39</td>
      <td style="text-align: center;">lee123doff@yahoo.com</td>
      <td><div class="ui small primary button">
        Abrir pedido
        </div></td>
    </tr>

           <tr>
       <td class="collapsing" style="width: 7%;background: #e2e2e2;">
        <div class="ui fitted toggle checkbox">
            <input type="checkbox" checked="checked" disabled="disabled">
            <label></label>
        </div>
      </td> 
      <td>
          <div class="content">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    Thiago Tollofi
                </font>
            </font>
        </div>
      </td>
      <td style="text-align: center;">Rua Francisco Marcel, 28</td>
      <td style="text-align: center;">Thigoo90@gmil.com</td>
      <td><div class="ui small primary button">
        Abrir pedido
        </div></td>
    </tr>
  </tbody>

  
</table>

