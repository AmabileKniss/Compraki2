<?php
/**
 * Created by PhpStorm.
 * User: BRUNO
 * Date: 23/11/2019
 * Time: 01:40
 */

class Conexao
{

    public static $conexao = null;

    public static function getConexao()
    {

        $con = new PDO("mysql:host=localhost;charset=utf8;dbname=compraki", "root", "");
        return $con;

    }

}
class CRUDgerente
{

    private $conexao;

    function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }
    public function mostraProdutos(){
        $consulta = $this->conexao->query('SELECT * FROM produtos');
        return $consulta;

    }
    public function mostraProdutoEditar($cod_prod){
        $consulta = $this->conexao->query("SELECT * FROM produtos where cod_prod = '$cod_prod'");
        return $consulta;
    }
    public function editarProd($nome, $desc_prod, $preco, $preco_unit, $qtd_emb, $categoria, $cod_prod){
        $consulta = $this->conexao->prepare("UPDATE produtos set nome = :nome and desc_prod = :desc_prod and preco = :preco and preco_unit = :preco_unit and qtd_emb = :qtd_emb and categoria = :categoria where cod_prod = '$cod_prod'");
        $consulta->execute(array(
            ':nome' => $nome,
            ':desc_prod' => $desc_prod,
            ':preco' => $preco,
            ':preco_unit' => $preco_unit,
            ':qtd_emb' => $qtd_emb,
            ':categoria' => $categoria

        ));
        header("location: gerente.php?sessao=editado");
    }
    public function excluirProduto($cod_prod){
       $excluir = $this->conexao->prepare("DELETE from produtos where cod_prod = '$cod_prod'");
        $excluir->execute();
        header("location: gerente.php");

    }

}
$crud = new CRUDgerente();
