<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="projeto";

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
    <title>Cadastro</title>
</head>
<body>
    <form method="post">
        <label>
            Nome <input type="text" name="nome" id="nome">
        </label>

        <label>
            <input type="date" value="">
        </label>



    </form>
    
</body>
</html>