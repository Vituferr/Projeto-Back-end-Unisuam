<?php
include 'config/auth.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['usuario'];
    $senha = $_POST['senha'];

    $_SESSION['msg'] = realizarAutenticacao($login, $senha);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/loginprofessor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>login</title>
</head>

<body>
    <form action="config/logarprof.php" method="post">
        <div class="main-login">
            <div class="left-login">
                <h1>Faça seu login<br></h1>
                <img src="./assets/astronauta.svg" class="left-login-img" alt="">
            </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario"></label>
                        <input type="text" name="usuario" placeholder="Digite seu CPF">
                    </div>
                    <div class="textfield">
                        <label for="senha"></label>
                        <input type="password" name="senha" placeholder="Digite a sua senha">
                    </div>
                    <div class="textfield">
                        <a href="cadastro.php">Ainda não sou cadastrado</a>
                        <a href="index.php">Voltar</a>
                    </div>
                    <a href="dashboard.php"><button class="btn-login">Login</button></a>
                </div>
            </div>

        </div>
    </form>

</body>

</html>