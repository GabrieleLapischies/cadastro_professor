<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de visualização de cadastro</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css">
</head>
<body>
<header>
        <nav class="naveg">
            <div>
                <p class="cnaveg"><a href="formulariocadas.php">Cadastrar professor</a></p>
            </div>
            <div>
                <p class="cnaveg"><a href="visualizar_cadastro.php">Visualizar cadastro</a></p>
            </div>
            <div>
                <p class="cnaveg"><a href="index.php">Página inicial</a></p>
            </div>
        </nav>
    </header>
    <div class="conteudo">
        <?php
        include_once 'conecta.php';

        $sql = "select * from tb_cadasprof";

        $res = mysqli_query($conexao, $sql);
        $linhas = mysqli_num_rows($res);

        for ($i = 0; $i < $linhas; $i++){
            $user = mysqli_fetch_array($res);
            echo $user['nome'];
            echo $user['cpf'];
            echo $user['email'];
            echo $user['telefone'];
            echo $user['instituicao'];
        }


        ?>
    </div>
</body>
</html>