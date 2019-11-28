<?php
function erroDeSenha()
{
    echo "<div class='ui negative message'><i class='close icon'></i> <div class='header'>Login ou senha incorretos</div></div>";
}
function semLogin(){
    echo "<div class='ui negative message'><i class='close icon'></i> <div class='header'>Faça login para adicionar algo ao seu carrinho</div></div>";

}

?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js"></script>
    <script>
    </script>
</head>
<body>
<div>&nbsp;</div>


<a href="index.php?sessao=1"><i class="arrow alternate circle left outline icon" style="margin-left: 4%;padding-top: 3%;font-size: -webkit-xxx-large;color: #f4511e;
"></i></a>
<div class="ui middle aligned center aligned grid"
     style="padding-left: 30%; padding-right: 30%; background-color: white; margin-top: -5%; padding-bottom: 12%;">
    <div class="column" style="margin-top: 16%; ">
        <h2 class="ui orange image header">
            <i class="user circle icon" style="color: #f4511e;"></i>
            <div class="content" style="color: #f4511e;">
                Acesse ou Cadastre sua Conta
            </div>
        </h2>
        <form class="ui large form" method="post" action="controladorLogin.php?action=login">
            <div class="ui stacked segment">
                <?php
                if ($_GET['sessao'] == "Digite_a_senha_corretamente") {
                    erroDeSenha();
                }elseif($_GET['erro'] == "sim") {
                    semLogin();
                } ?>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon" style="padding-bottom: 8%;"></i>
                        <input type="text" name="cpf" id="cpf" placeholder="CPF">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="pwd" id="pwd" placeholder="Senha">
                    </div>
                </div>
                <input type="submit" class="ui fluid large orange submit button" style="background-color: #f4511e;">

            </div>


        </form>

        <div class="ui message">
            Ainda não está cadastrado? <a href="cadastro.php" style=";font-weight: bolder;">Cadastre-se</a><br>

        </div>
    </div>

</div>

</body>
</html>