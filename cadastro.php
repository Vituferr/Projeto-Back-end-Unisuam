<?php

    if(isset($_POST['submit']))
    {
        // print_r($_POST['nomelogin']);
        // print_r('<br>');
        // print_r($_POST['dt-nasc']);
        // print_r('<br>');
        // print_r($_POST['sexo']);
        // print_r('<br>');
        // print_r($_POST['mae-log']);
        // print_r('<br>');
        // print_r($_POST['cpf']);
        // print_r('<br>');
        // print_r($_POST['telcelular']);
        // print_r('<br>');
        // print_r($_POST['telfixo']);
        // print_r('<br>');
        // print_r($_POST['endereco']);
        // print_r('<br>');
        // print_r($_POST['nome-login']);
        // print_r('<br>');
        // print_r($_POST['senhalogin']);
        // print_r('<br>');
        // print_r($_POST['confirm-senha']);
        
        include_once('config.php');

        $nome    = $_POST['nomelogin'];
        $dt_nasc = $_POST['dt-nasc'];
        $sexo    = $_POST['sexo'];
        $mae     = $_POST['mae-log'];
        $cpf     = $_POST['cpf'];
        $telcel  = $_POST['telcelular'];
        $telfix  = $_POST['telfixo'];
        $endereco = $_POST['endereco'];
        $login   = $_POST['nome-login'];
        $senha   = $_POST['senhalogin'];

        $result = mysqli_query($conexao, "INSERT INTO usuario (nome, dt_nasc, sexo, nome_mat, cpf, tel_celular, tel_fixo, endereco, login, senha)
        VALUES ('$nome', '$dt_nasc', '$sexo', '$mae', '$cpf', '$telcel', '$telfix', '$endereco', '$login', '$senha')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles/cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="script/validarform.js"></script>
    
    
</head>

<body>
    <div class="main-cadastro">
        <form action="cadastro.php" id="formcad" method="post">
            <div class="campos-cad">
                <h1>Faça seu cadastro</h1>
                <div class="coluna">
                    <div class="lado-esquerdo">
                        <div class="textfield">
                            <label for="nomeloginn"> Nome:</label>
                            <input type="text" name="nomelogin" id="nomelogin" minlength="15" required>
                        </div>

                        <div class="textfield">
                            <label for="dt-nasc"> Data de Nascimento:</label>
                            <input type="date" name="dt-nasc" id="dt-nasc" required>
                        </div>

                        <div class="textfield">
                            <div class="sexo">
                                <label for="sexo"> Sexo:</label>
                                <p><input type="radio" name="sexo" value="masculino" required>Masc.
                                <input type="radio" name="sexo" value="feminino" required>Fem.
                                <input type="radio" name="sexo" value="outro" required>Outro
                                </p>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="mae-log"> Nome da mãe:</label>
                            <input type="text" name="mae-log" id="mae-log" required>
                        </div>

                        <div class="textfield">
                            <label for="cpf"> CPF:</label>
                            <input type="text" name="cpf" id="cpf" maxlength="14" required oninput="formatarCPF()">
                        </div>
                    </div>
                    
                    <div class="lado-direito">
                        <div class="textfield">
                            <label for="telcelular"> Telefone celular:</label>
                            <input type="text" name="telcelular" id="telefone" maxlength="17" required oninput="formatarTelefone()">
                        </div>

                        <div class="textfield">
                            <label for="telfixo"> Telefone Fixo:</label>
                            <input type="text" name="telfixo" id="telefoneFixo" maxlength="17" required oninput="formatarTelefone2()">
                        </div>

                        <div class="textfield">
                            <label for="endereco"> Endereço:</label>
                            <input type="text" name="endereco" id="endereco" required>
                        </div>

                        <div class="textfield">
                            <label for="nome-login">Nome login:</label>
                            <input type="text" name="nome-login" id="nome-login" required>
                        </div>

                        <div class="textfield">
                            <label for="senhalogin">Senha:</label>
                            <input type="password" name="senhalogin" id="senhalogin" required>

                            <label for="confirm-senha">Confirme sua senha:</label>
                            <input type="password" name="confirm-senha" id="confirm-senha" required>
                        </div>

                    </div>
                </div>
                
                <div class="coluna-btn">
                    <div class="btn-esquerdo">
                        <button type="submit" name="submit" class="btn-login">Enviar</button>
                    </div>
                    <div class="btn-direito">
                        <button class="btn-limpar">Limpar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


</body>
</html>