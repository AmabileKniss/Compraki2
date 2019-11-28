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

    function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

        public function login($cpf, $pwd){
            $consulta = $this->conexao->query("SELECT nome, tipuser_cd FROM cad_usuario WHERE cpf = '$cpf' AND pwd = '$pwd'");
            $row = $consulta->fetch(PDO::FETCH_OBJ);
            if($row->tipuser_cd == 4){
                header("location: admin.php?sessao=admin");
            }elseif($row->tipuser_cd == 3){
                header("location: gerente.php?sessao=gerente");
            }elseif($row->tipuser_cd == 2) {
                header("location: pag_entregador.php");
            }elseif($row->nome != "") {
                header("location: index.php?sessao=logado&&cpf=$cpf");
            }
            else{
                header("location: Login.php?sessao=Digite_a_senha_corretamente");
            }
        }

        public function cadastrarUsuario($cpf, $rg, $nome, $email, $tel, $cel, $pwd, $tipuser_cd){

            $inserir = $this->conexao->prepare('INSERT INTO cad_usuario (cpf, rg, nome, email, tel, cel, pwd, tipuser_cd) values (:cpf, :rg,:nome, :email, :tel, :cel, :pwd, :tipuser_cd)');
            $inserir->execute(array(
                ':cpf' => $cpf,
                ':rg' => $rg,
                ':nome' => $nome,
                ':email' => $email,
                ':tel' => $tel,
                ':cel' => $cel,
                ':pwd' => $pwd,
                ':tipuser_cd' => $tipuser_cd
        ));
            header("location: index.php?sessao=logado&&cpf=$cpf");
        }
        public function alterarUsuario($cpf, $rg, $nome, $email, $tel, $cel, $pwd){
            $alterar = $this->conexao->prepare('UPDATE cad_usuario set rg = :rg and nome = :nome and email = :email and tel = :tel and cel = :cel and pwd = :pwd where cpf = :cpf');
            $alterar->execute(array(
                ':cpf' => $cpf,
                ':rg' => $rg,
                ':nome' => $nome,
                ':email' => $email,
                ':tel' => $tel,
                ':cel' => $cel,
                ':pwd' => $pwd,
            ));
        }
        public function excluirUsuario($pwd){
            $excluir = $this->conexao->prepare("DELETE from cad_usuario where pwd = '$pwd'");
            $excluir->execute();
            return "Excluido com sucesso";
        }

    }
        $crud = new CRUDLogin();
       //echo $crud->cadastrarUsuario($_POST['cpf'], $_POST['rg'], $_POST['nome'], $_POST['email'], $_POST['tel'],$_POST['cel'],$_POST['pwd'], "1");
       // echo $crud->login($_POST['cpf'], $_POST['pwd']);
        //echo $crud->excluirUsuario($_POST['pwd']);
       // $cpf = $_POST['cpf'];

