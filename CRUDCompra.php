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

class CRUDCompra
{

    private $conexao;

    function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function cadastrarEndereco($nome, $sobrenome, $endereco, $numero, $estado, $cd_cpf, $horarioEntrega, $formaPagamento, $bandeiraCartao, $numeroCartao, $cvc, $mesVencimento, $anoVencimento)
    {

        $inserir = $this->conexao->prepare('INSERT INTO endereco (nome, sobrenome, endereco, numero, estado, cd_cpf, horarioEntrega, formaPagamento, bandeiraCartao, numeroCartao, cvc, mesVencimento, anoVencimento) values (:nome, :sobrenome, :endereco, :numero, :estado, :cd_cpf, :horarioEntrega, :formaPagamento, :bandeiraCartao, :numeroCartao, :cvc, :mesVencimento, :anoVencimento)');
        $inserir->execute(array(
            ':nome' => $nome,
            ':sobrenome' => $sobrenome,
            ':endereco' => $endereco,
            ':numero' => $numero,
            ':estado' => $estado,
            ':cd_cpf' => $cd_cpf,
            ':horarioEntrega' => $horarioEntrega,
            ':formaPagamento' => $formaPagamento,
            ':bandeiraCartao' => $bandeiraCartao,
            ':numeroCartao' => $numeroCartao,
            ':cvc' => $cvc,
            ':mesVencimento' => $mesVencimento,
            ':anoVencimento' => $anoVencimento
        ));
        header("location: finalizaCompra.php?action=mostra&&cpf=$cd_cpf");
    }

    public function mostrarDados($cd_cpf){
        $consulta = $this->conexao->query("SELECT * FROM endereco where cd_cpf = '$cd_cpf'");
        return $consulta;
    }

}
$crud = new CRUDCompra();

    //echo $crud->cadastrarEndereco($_POST['nome'], $_POST['sobrenome'], $_POST['endereco'], $_POST['numero'], $_POST['estado'], $_POST['cd_cpf'], $_POST['horarioEntrega'], $_POST['formaPagamento'], $_POST['bandeiraCartao'], $_POST['numeroCartao'], $_POST['cvc'], $_POST['mesVencimento'], $_POST['anoVencimento']);
    //$produto = $crud->mostrarDados($_POST['cd_cpf']);



