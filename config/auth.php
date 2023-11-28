<?php
include 'config.php';

function realizarAutenticacao($login, $senha)
{
    global $pdo;

    if ($login == "") {
        return "<p style='font: size 23px;px'> PREENCHA OS DADOS CORRETAMENTE.</p>";
    } else {
        $query = "SELECT login,senha FROM usuario WHERE login=:login AND senha=:senha";
        $result = $pdo->prepare($query);
        $result->bindParam(":login", $login, PDO::PARAM_STR);
        $result->bindParam(":senha", $senha, PDO::PARAM_STR);
        $result->execute();

        if ($result->rowCount() != 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            // Usuário logado com sucesso.
            header('Location: dashboard.php');
            exit(); // Certifique-se de parar a execução após o redirecionamento.
        } else {
            return "<p style='color:#ff0000'>Usuário não encontrado.</p>";
        }
    }
}
?>
