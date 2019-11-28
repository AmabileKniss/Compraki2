<?php
require "CRUDgerente.php";
$cod_prod = $_GET['cod_prod'];
if($_GET['action'] == "excluir"){
   echo $crud->excluirProduto($cod_prod);
}else{
	true;
}
