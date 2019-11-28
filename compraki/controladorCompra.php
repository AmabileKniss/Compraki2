<?php
require "CRUDCompra.php";
    if($_GET['funcao'] == "cadastro"){
        cadastro($crud, $nome, $sobrenome, $endereco, $numero, $estado, $cd_cpf, $horarioEntrega, $formaPagamento, $bandeiraCartao, $numeroCartao, $cvc, $mesVencimento, $anoVencimento);
    }
    function cadastro($crud, $nome, $sobrenome, $endereco, $numero, $estado, $cd_cpf, $horarioEntrega, $formaPagamento, $bandeiraCartao, $numeroCartao, $cvc, $mesVencimento, $anoVencimento){
        echo $crud->cadastrarEndereco($_POST['nome'], $_POST['sobrenome'], $_POST['endereco'], $_POST['numero'], $_POST['estado'], $_POST['cd_cpf'], $_POST['horarioEntrega'], $_POST['formaPagamento'], $_POST['bandeiraCartao'], $_POST['numeroCartao'], $_POST['cvc'], $_POST['mesVencimento'], $_POST['anoVencimento']);

    }
