<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js"></script>
    <style>

    </style>
</head>
<body>
<br><br>

<a href="index.php"><i class="arrow alternate circle left outline icon" style="margin-left: 3%;font-size: -webkit-xxx-large;color: #f4511e;
"></i></a>

<div class="ui middle aligned center aligned grid" style="padding-left: 30%; padding-right: 30%; margin-top: -6%;">
    <div class="column" style="margin-top: 14%;">
        <h2 class="ui orange image header">
            <i class="user circle icon" style="color: #f4511e;"></i>
            <div class="content" style="color: #f4511e;">
                Cadastre sua Conta
            </div>
        </h2>
        <form class="ui large form" method="post" action="controladorLogin.php?action=cadastro">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="nome" id="nome" placeholder="Nome Completo">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="pwd" id="pwd" placeholder="Senha">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="confirmaSenha" placeholder="Confirmação de Senha">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="address card icon"></i>
                        <input type="number" name="rg" id="rg" placeholder="RG(Somente Números)">
                        <input type="number" name="cpf" id="cpf" placeholder="CPF(Somente Números)"
                               style="border-left: 44px;">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="address card icon"></i>
                        <input type="number" name="tel" id="tel" placeholder="Telefone(Somente Números)">
                        <input type="number" name="cel" id="cel" placeholder="Celular(Somente Números)"
                               style="border-left: 44px;">
                    </div>
                </div>
                <input type="submit" class="ui fluid large orange submit button" name="Cadastrar"
                       style="background-color: #f4511e">
            </div>

        </form>

        <div class="ui message">
            Já possui cadastro? <a href="Login.php?sessao=nao" style=";font-weight: bolder;">Login</a><br>

        </div>
    </div>
</div>

</body>
</html>