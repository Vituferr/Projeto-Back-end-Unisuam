<?php
include "config/config.php";

if(isset($_POST['submit'])){   
    try{
        $query = $pdo->prepare ("INSERT INTO usuario (nome, dt_nasc, sexo, nome_mat, cpf, tel_celular, tel_fixo, endereco, login, senha)
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
        $query->bindeParam(10,$senha,PDO::PARAM_STR);
        $query->execute();
        header('Location: config/config.php?erro=0');
    }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            header('Location: cadastro.php?erro=1');
    }
}

?>