<?php
include("CRUDprodutos.php");
$cpf = $_GET['cpf'];

if ($_GET['sessao'] != "Carrinho") {
    $login = "Login";
} else {
    $login = "Carrinho";

}


if ($_GET['busca'] != "categoria") {
    $produtos = $crudProd->categoriaProduto($_GET['categoria']);
} elseif ($_GET['busca'] == "todos") {
    $produtos = $crudProd->lerProdutos();
} else {
    $produtos = $crudProd->buscaProduto("Cravo");
}
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
?>
<html>

<head>
    <title>CompreAki</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js">
    </script>

</head>
<body>
<div style="background-color: #f4511e; color: white; ; padding-top: 4%;">
    <h1 style="font-size: 73px;text-align: center; font-family:" Lucida Sans Unicode", "Lucida Grande",
    sans-serif;"><?= ucfirst($_GET['categoria']); ?></h1>
    <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7; margin-bottom: 4%;"></h3>
    <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
</div>

<div class="ui secondary pointing menu" style="margin-top: 0%;font-size: 115%;">
    <a href="produto.php?categoria=bebidas&&sessao=<?= $login ?>&&cpf=<?= $cpf ?>" class="item">
        Bebidas
    </a>
    <a href="produto.php?categoria=açougue&&sessao=<?= $login ?>&&cpf=<?= $cpf ?>" class="item">
        Açougue
    </a>
    <a href="produto.php?categoria=comidas&&sessao=<?= $login ?>&&cpf=<?= $cpf ?>" class="item">
        Comidas
    </a>
    <a href="produto.php?categoria=higiene&&sessao=<?= $login ?>&&cpf=<?= $cpf ?>" class="item">
        Higiêne
    </a>
    <a href="produto.php?categoria=verdureira&&sessao=<?= $login ?>&&cpf=<?= $cpf ?>" class="item">
        Verdureira
    </a>
    <a href="produto.php?categoria=frios&&sessao=<?= $login ?>&&cpf=<?= $cpf ?>" class="item">
        Frios
    </a>
    <div class="ui right menu">

    </div>
</div>
<?php
if ($_GET['sessao'] == "Login") {
    require "menuof.php";
} else {
    require "menuLogado.php";
}

?>

<form method="post" action="controladorCarrinho.php?action=carrinho&&cpf=<?= $cpf ?>">
    <div class="ui link cards" id="cards" style="margin-left: 3.7%;">

        <?php foreach ($produtos as $produto): ?>

            <div class="card" id="cardsJogos">
                <div class="image">
                    <img src="img/arroz.png" style="width: 200px; height: 230px;">
                </div>
                <div class="content">
                    <div class="description" id="nome_produto" value="<?= $produto['nome'] ?>">
                        <?= $produto['nome'] ?>
                    </div>
                </div>
                <div class="extra content">
      <span class="right floated" style="padding-right: 20px">

      </span><span id="preco_produto" value="<?= $produto['preco'] ?>">
        R$<?= $produto['preco'] ?><i class="tag up icon blue" style="color-text: black; padding-left: 200px;"></i>
      </span>
                </div>


                <button class = "ui green button" type="submit" id="cod_prod" name="cod_prod" value="<?= $produto['cod_prod'] ?>, <?= $cpf ?>,<?= $produto['nome'] ?>, <?= $produto['preco'] ?>">Adicionar ao
                                            Carrinho
                </button>
            </div>
        <?php endforeach ?>

    </div>
</form>

</body>
</html>
