<?php

class Conexao
{

    public static $conexao = null;

    public static function getConexao()
    {

        $con = new PDO("mysql:host=localhost;charset=utf8;dbname=compraki", "root", "");
        return $con;

    }

}

class CRUDAdmin
{

    private $conexao;

    function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function mostraUsuarios()
    {
        $consulta = $this->conexao->query('SELECT * FROM cad_usuario ORDER BY nome ASC');
        return $consulta;
    }

    public function excluirUser($cpf)
    {
        $excluir = $this->conexao->prepare("DELETE from cad_usuario where cpf = '$cpf'");
        $excluir->execute();
        header("location: admin.php");

    }
    public function editarGerente($cpf){
        $editar = $this->conexao->prepare("UPDATE cad_usuario set tipuser_cd = 3 where cpf = '$cpf'");
        $editar->execute();
        header("location: admin.php");
    }
    public function editarEntregador($cpf){
        $editar = $this->conexao->prepare("UPDATE cad_usuario set tipuser_cd = 2 where cpf = '$cpf'");
        $editar->execute();
        header("location: admin.php");
    }
}
$crud = new CRUDAdmin();
//echo $crud->editarGerente("40025822");
