<?php
include "config/config.php";

if(isset($_POST['enviar'])){  

    try{
        $nome = $_POST['nomelogin'];
        $dt_nasc = $_POST['dt-nasc'];
        $sexo = $_POST['sexo'];
        $mae = $_POST['mae-log'];
        $cpf = $_POST['cpf'];
        $telcel = $_POST['telcelular'];
        $telfix = $_POST['telfixo'];
        $endereco = $_POST['endereco'];
        $login = $_POST['nome-login'];
        $senha = $_POST['senhalogin'];

        $query = $pdo->prepare ("INSERT INTO Usuario (nome, dt_nasc, sexo, nome_mat, cpf, tel_celular, tel_fixo, endereco, login, senha)
        VALUES (?,?,?,?,?,?,?,?,?,?)");

        $query->bindParam(1,$nome,PDO::PARAM_STR);
        $query->bindParam(2,$dt_nasc,PDO::PARAM_STR);
        $query->bindParam(3,$sexo,PDO::PARAM_STR);
        $query->bindParam(4,$mae,PDO::PARAM_STR);
        $query->bindParam(5,$cpf,PDO::PARAM_STR);
        $query->bindParam(6,$telcel,PDO::PARAM_STR);
        $query->bindParam(7,$telfix,PDO::PARAM_STR);
        $query->bindParam(8,$endereco,PDO::PARAM_STR);
        $query->bindParam(9,$login,PDO::PARAM_STR);
        $query->bindParam(10,$senha,PDO::PARAM_STR);
        $query->execute();  
        header('Location: login.php?cadastro=success');
        exit();
    }
        catch(PDOException $e) {
            echo 'ERROR:' . $e->getMessage();
            header('Location: cadastro.php?erro=1');
    }
}

?>