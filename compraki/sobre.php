<?php
if ($_GET['sessao'] == "Carrinho") {
    $login = "Carrinho";
} else {
    $login = "Login";

}
?>
<html>
<head>
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js"></script>
    <link rel="stylesheet" type="text/css" href="../dist/components/reset.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/site.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/container.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/grid.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/header.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/image.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/menu.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/divider.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/segment.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/button.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/list.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/icon.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="../dist/components/transition.css">
    <style type="text/css">
        .hidden.menu {
            display: none;
        }
        .masthead.segment {
            min-height: 700px;
            padding: 1em 0em;
        }
        .masthead .logo.item img {
            margin-right: 1em;
        }
        .masthead .ui.menu .ui.button {
            margin-left: 0.5em;
        }
        .masthead h1.ui.header {
            margin-top: 3em;
            margin-bottom: 0em;
            font-size: 4em;
            font-weight: normal;
        }
        .masthead h2 {
            font-size: 1.7em;
            font-weight: normal;
        }
        .ui.vertical.stripe {
            padding: 8em 0em;
        }
        .ui.vertical.stripe h3 {
            font-size: 2em;
        }
        .ui.vertical.stripe .button + h3,
        .ui.vertical.stripe p + h3 {
            margin-top: 3em;
        }
        .ui.vertical.stripe .floated.image {
            clear: both;
        }
        .ui.vertical.stripe p {
            font-size: 1.33em;
        }
        .ui.vertical.stripe .horizontal.divider {
            margin: 3em 0em;
        }
        .quote.stripe.segment {
            padding: 0em;
        }
        .quote.stripe.segment .grid .column {
            padding-top: 5em;
            padding-bottom: 5em;
        }
        .footer.segment {
            padding: 5em 0em;
        }
        .secondary.pointing.menu .toc.item {
            display: none;
        }
        @media only screen and (max-width: 700px) {
            .ui.fixed.menu {
                display: none !important;
            }
            .secondary.pointing.menu .item,
            .secondary.pointing.menu .menu {
                display: none;
            }
            .secondary.pointing.menu .toc.item {
                display: block;
            }
            .masthead.segment {
                min-height: 350px;
            }
            .masthead h1.ui.header {
                font-size: 2em;
                margin-top: 1.5em;
            }
            .masthead h2 {
                margin-top: 0.5em;
                font-size: 1.5em;
            }
        }
    </style>
    <script src="assets/library/jquery.min.js"></script>
    <script src="../dist/components/visibility.js"></script>
    <script src="../dist/components/sidebar.js"></script>
    <script src="../dist/components/transition.js"></script>
    <script>
        $(document)
            .ready(function () {
                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function () {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function () {
                            $('.fixed.menu').transition('fade out');
                        }
                    })
                ;
                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                ;
            })
        ;
    </script>
</head>
<body>
<div class="ui secondary pointing fixed hidden menu" style="background-color: #f4511e; display: flex !important; ">
    <a class="item" href="index.php">
        <p style="font-size: 20px; color: white;">Compraki</p>
    </a>
    <div id="menuzinho" class="right menu" style="background-color: #f4511e; padding-right: 40px; ">
        <a class="item" href="index.php" style="color: white;">
            Home
        </a>
        <a href="Carrinho.php" class="item" style="color: white;">
            Carrinho
        </a>
        <a class="item" href="Login.php" style="color: white;">
            Login
        </a>
        <a href="sobre.php" class=" active item" style="color: white;border-color: #ffffff;">
            Sobre Nós
        </a>
    </div>
</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<!-- Page Contents -->
<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment" style="background-color: #f4511e;">
        <div class="ui text container">
            <h1 class="ui inverted header">
                SOBRE NÓS
            </h1>
            <h2>Projeto de Conclusão de Curso</h2>
            <a href="rodape.php">
                <div class="ui huge primary button" style="background-color: #1b1c1d;">Contato <i
                            class="right arrow icon"></i>
                </div>
            </a>
        </div>
    </div>
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">OBJETIVOS</h3>
                    <p>Proporcionar um projeto de conclusão de curso, visando a acessibilidade e facilitação do processo de compras. Criando um mercado online de entregas à domicílio. O projeto pode ser melhorado no futuro, e pode se tornar uma ferramenta para algum comércio interessado. </p>
                    <h3 class="ui header">SOBRE O CURSO</h3>
                    <p>O curso de Técnico de Informática Integrado ao Ensino Médio conta com três anos de duração e diversos assuntos abordados na área da tecnologia, a fim de fortalecer o curricúlo do aluno e prepará-lo para o mercado de trabaho da região que possui tendência de expansão nessa área.</p>
                </div>
                <div class="six wide right floated column">
                    <img src="data_bases/img/empresa.jpg" class="ui large bordered rounded image">
                </div>
            </div>
            <div class="row">
                <div class="center aligned column">
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <a class="ui huge button">Nos conheça melhor</a>
                </div>
            </div>
        </div>
    </div>
    <div class="ui text container">
        <h1 class="ui dividing header" style="margin-top: 4%;">IDEALIZADORES</h1>
        <p>Amabile Kniss, Bruno Fhynbeen e Gabriel Bao. Formandos da turma 2 do terceiro ano do curso de informática de 2019</code>
        </p>
    </div>
    <div>&nbsp;</div>