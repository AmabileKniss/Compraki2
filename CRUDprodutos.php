<?php

class Conexao
{

    public static $conexao = null;

    public static function getConexao()
    {

        $con = new PDO("mysql:host=localhost;charset=utf8; dbname=compraki", "root", "");
        return $con;

    }

}

class CRUDprodutos
{
    private $conexao;

    function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function lerProdutos()
    {
        $consulta = $this->conexao->query('SELECT * FROM produtos');
        return $consulta;


    }

    public function cadastrarProdutos($nome, $desc_prod, $preco, $qtd_emb, $categoria, $preco_unit)
    {
        $inserir = $this->conexao->prepare('INSERT INTO produtos (nome, desc_prod, preco, qtd_emb, categoria, preco_unit) values (:nome, :desc_prod,:preco, :qtd_emb, :categoria, :preco_unit)');
        $inserir->execute(array(
            ':nome' => $nome,
            ':desc_prod' => $desc_prod,
            ':preco' => $preco,
            ':qtd_emb' => $qtd_emb,
            ':categoria' => $categoria,
            ':preco_unit' => $preco_unit
        ));
        header("location: adcProdutos.php?action=cadastrar");
    }

    public function categoriaProduto($categoria)
    {
        $consulta = $this->conexao->query("SELECT nome, desc_prod, preco, cod_prod, qtd_emb, categoria, preco_unit FROM produtos where categoria = '$categoria'");
        return $consulta;
    }

    public function buscaProduto($categoria, $nome)
    {
        $consulta = $this->conexao->query('SELECT nome, desc_prod, preco, cod_prod, qtd_emb, categoria, preco_unit from produtos where nome, categoria LIKE '%"$categoria"%'');
        return $consulta;
    }
    public function addCarrinho($cpf_usuario, $cod_produto, $nome_produto, $preco_produto){
        $insere = $this->conexao->prepare("INSERT INTO entrega(cpf_usuario, cod_produto, nome_produto, preco_produto) values(:cpf_usuario, :cod_produto, :nome_produto, :preco_produto) ");
        $insere->execute(array(
            ':cpf_usuario' => $cpf_usuario,
            ':cod_produto' => $cod_produto,
            ':nome_produto' => $nome_produto,
            ':preco_produto' => $preco_produto
        ));
        header("location: carrinho.php?action=verCarrinho&&cpf=$cpf_usuario");
    }
    public function mostraCarrinho($cpf_usuario){
        $ler = $this->conexao->query("SELECT * FROM entrega where cpf_usuario = '$cpf_usuario' ");
        return $ler;
    }
    public function somarValores($cpf_usuario){
        $soma = $this->conexao->query("SELECT sum(preco_produto) from entrega where cpf_usuario = '$cpf_usuario'");
        return $soma;
    }
}

$crudProd = new CRUDprodutos();

//$produto = $crud->categoriaProduto('Cozinha');
//echo  $crud->buscaProduto("Cravo");

