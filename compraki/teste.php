<?php
require "CRUDprodutos.php";
$cpf_usuario = $_GET['cpf'];
if ($_GET['action'] == "verCarrinho") {
$produtos = $crudProd->lerProdutos();
} else {
echo "deu ruim";
}
foreach($produtos as $produto){
    echo $produto['nome'];
}
?>