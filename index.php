<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'empresa';
$port = '3306';

try {
    $connection = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
} catch (PDOException $e) {
    echo "Erro de conexão com o banco" . $e->getMessage();
}
if (isset($_POST['acessar'])) {

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $senhaValida = isset($_POST['senha']) ? $_POST['$senha'] : '';
    $loginValido = isset($_POST['login']) ? $_POST['$login'] : '';

$query = "select login, senha from usuario where login=:login";
$result = $connection -> prepare($query);
$result -> bindParam(":login", $login, PDO::PARAM_STR);
$result ->execute();

    if ($result->rowCount() !=0) {
        $row = $result -> fetch(PDO::FETCH_ASSOC);
        echo"Usuario logado com sucesso.";
    } else {
        $_SESSION['msg'] = "<p style='color:off0000'>Usuario não encontrado";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Fazendo integração com o MySQL.</h2>
    <form method="post" name="LOGIN">

        <label>
            Login: <Input name='login'></Input>
        </label>

        <label>
            Digite sua senha: <Input name='senha'></Input>
        </label>

        <button name="acessar">ACESSAR</button>

    </form>

</body>
</html>