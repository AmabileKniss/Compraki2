<?php
include "CRUDAdmin.php";
$crud = new CRUDAdmin();
$usuario = $crud->mostraUsuarios();

?>
<html>
<head>
    <title>Gerente</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js"></script>

</head>
<body>
<div class="ui secondary pointing fixed hidden menu" style="background-color: #f4511e; display: flex !important; ">
    <a class="item" href="admin.php">
        <p style="font-size: 20px; color: white;">Compraki</p>
    </a>
    <div id="menuzinho" class="right menu" style="background-color: #f4511e; padding-right: 40px; ">
        <a class="item" href="index.php?sessao=nao" style="color: white;">
            <i class="ui logout icon"></i>
        </a>
    </div>
</div>
<br>
<br>
</div>
<div style="background-color: #f4511e; color: white;
    padding-top: 4%;margin-bottom: -1%;padding-bottom: 3%;">
    <h1 style="font-size: 73px;text-align: center; font-family:" Lucida Sans Unicode", "Lucida Grande",
    sans-serif;>Administração de Usuários</h1>
    <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7;"></h3>
    <div class="ui icon input" style="width: 95%; padding-left: 5%"></div>
</div>

<table class="ui compact celled definition table">
    <thead>
    <tr>
        <th></th>
        <th>Nome</th>
        <th>Email</th>
        <th>CPF</th>
        <th>Tipo do Usuario</th>

    </tr>
    </thead>
    <?php foreach ($usuario

    as $user): ?>
    <form method="post">
        <tbody>
        <tr>
            <td class="collapsing">
                <div class="ui buttons">

                    <button class="ui blue button" id="editar" name="editar" value="<?= $user['cpf'] ?>"><a href="controladorAdmin.php?action=addGerente&&cpf=<?= $user['cpf']?>" style="color: white;">Gerente</a></button>
                    <button class="ui violet button" id="entregador" name="entregador" value="<?= $user['cpf'] ?>"><a href="controladorAdmin.php?action=addEntregador&&cpf=<?= $user['cpf'] ?>" style="color: white;">Entregador</a></button>
                    <button class="ui red button" id="cpf" name="cpf" value="<?= $user['cpf'] ?>"><a href="controladorAdmin.php?action=excluir&&cpf=<?= $user['cpf'] ?>" style="color: white;">Excluir</a></button>



                </div>
                <?php if ($user['tipuser_cd'] == 1) {
                    $user['tipuser_cd'] = "Cliente";
                }elseif($user['tipuser_cd'] == 2){
                    $user['tipuser_cd'] = "Entregador";
                }elseif($user['tipuser_cd'] == 3){
                    $user['tipuser_cd'] = "Gerente";
                }else{
                    $user['tipuser_cd'] = "Administrador de Usuario";
                }

                ?>
            </td>
            <td><?= $user['nome'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['cpf'] ?></td>
            <td><?= $user['tipuser_cd']?></td>
        </tr>

        </tbody>
        <?php endforeach; ?>
    </form>
</table>
<br>
</body>
</html>