<?php
include "CRUDAdmin.php";

$cpf = $_GET['cpf'];
$acao = $_GET['action'];

if($acao == "excluir"){
    excluirUser($cpf, $crud);
}elseif($acao == "addGerente"){
    editarGerente($cpf, $crud);
}elseif($acao == "addEntregador"){
    editarEntregador($cpf, $crud);
}
else{
    true;
}
function excluirUser($cpf, $crud){
    echo $crud->excluirUser($cpf);
}
function editarGerente($cpf, $crud){
    echo $crud->editarGerente($cpf);
}
function editarEntregador($cpf, $crud){
    echo $crud->editarEntregador($cpf);
}