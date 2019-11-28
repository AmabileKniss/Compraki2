<?php


$nome = $_POST['nome'];
$desc_prod = $_POST['desc_prod'];
$preco = $_POST['preco'];
$qtd_emb = $_POST['qtd_emb'];
$categoria = $_POST['categoria'];
$preco_unit = $_POST['preco_unit'];
require "CRUDprodutos.php";
if($_GET['action'] == "cadastrar"){
    cadastrar($nome, $desc_prod, $preco, $qtd_emb, $categoria, $preco_unit, $crudProd);
}else{
    true;
}

    function cadastrar($nome, $desc_prod, $preco, $qtd_emb, $categoria, $preco_unit, $crudProd)
    {
        echo $crudProd->cadastrarProdutos($_POST['nome'], $_POST['desc_prod'], $_POST['preco'], $_POST['qtd_emb'], $_POST['categoria'], $_POST['preco_unit']);
    }
