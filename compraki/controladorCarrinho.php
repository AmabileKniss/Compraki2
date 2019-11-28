<?php


$cod_prod=  explode(",", $_POST['cod_prod']);
$cod_produto = $cod_prod[0];
$cpf_usuario = $cod_prod[1];
$nome_produto = $cod_prod[2];
$preco_produto = $cod_prod[3];
$cpf_usu = strlen($cpf_usuario);
require "CRUDprodutos.php";
if($_GET['action'] == "carrinho" AND $cpf_usu > 2){

    addCarrinho($cpf_usuario, $cod_produto, $nome_produto, $preco_produto, $crudProd);

}elseif($cpf_usu == 1 AND $cpf_usu == "3") {
    header("location: Login.php?sessao=nao&&erro=sim");
}elseif($_GET['action'] == "verCarrinho"){

    verCarrinho($crudProd);
}else{
   header("location: Login.php?sessao=nao&&erro=sim");
}
function addCarrinho($cpf_usuario, $cod_produto, $nome_produto, $preco_produto, $crudProd){
    echo $crudProd->addCarrinho($cpf_usuario, $cod_produto, $nome_produto, $preco_produto);
}
function verCarrinho($crudProd, $cpf_usuario){
    return $produtos = $crudProd->mostraCarrinho($cpf_usuario);
}


