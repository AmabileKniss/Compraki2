<?php

class Conexao {

    public static $conexao = null;
    public static function getConexao(){

        $con = new PDO("mysql:host=localhost;charset=utf8;dbname=compraki", "root", "");
        return $con;

    }

}

class CRUDLogin{

    private $conexao;

    function __construct(){
        $this->conexao = Conexao::getConexao();
    }

    public function abrirEntregas(){
        $entrega = $this->conexao->query('SELECT cpf_usuario, nome_produto, preco_produto from entrega');
        return $entrega;
    
    }
}


    $crudEntrega = new CRUDLogin();