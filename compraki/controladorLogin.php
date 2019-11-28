<?php
    $cpf =$_POST['cpf'];
    $pwd = $_POST['pwd'];
    $rg = $_POST['rg'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $cel = $_POST['cel'];
    $tipuser_cd = "1";
    require "CRUDLogin.php";

    if($_GET['action']=="login"){
        login($cpf, $pwd, $crud);
    }elseif($_GET['action'] == "cadastro"){
        cadastro($cpf, $rg, $nome, $email, $tel, $cel, $pwd, $tipuser_cd, $crud);
    }elseif($_GET['action'] == "alterar"){
        alterar();
    }else{
        true;
    }
    function login($cpf, $pwd, $crud){
        echo $crud->login($_POST['cpf'], $_POST['pwd']);
    }
    function cadastro($cpf, $rg, $nome, $email, $tel, $cel, $pwd, $tipuser_cd, $crud){
        echo $crud->cadastrarUsuario($_POST['cpf'], $_POST['rg'], $_POST['nome'], $_POST['email'], $_POST['tel'],$_POST['cel'],$_POST['pwd'], "1");
    }
