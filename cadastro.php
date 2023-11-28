
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="assets/js/validarform.js"></script>
    
    
</head>

<body>
    <div class="main-cadastro">
        <form action="db_cadastro.php" id="formcad" method="post">
            <div class="campos-cad">
                <h1>Faça seu cadastro</h1>
                <div class="coluna">
                    <div class="lado-esquerdo">
                        <div class="textfield">
                            <label for="nomeloginn"> Nome:</label>
                            <input type="text" name="nomelogin" id="nomelogin" class="nome  required" minlength="15" required oninput="nomeValida()">
                            <span class="span-">Nome completo</span>
                        </div>

                        <div class="textfield">
                            <label for="dt-nasc"> Data de Nascimento:</label>
                            <input type="date" name="dt-nasc" id="dt-nasc" class="dtnasc  required" required oninput="dtnascValida()">
                        </div>

                        <div class="textfield">
                            <div class="sexo   required"  oninput="sexoValida()">
                                <label for="sexo"> Sexo:</label>
                                <p><input type="radio" name="sexo" value="masculino" required>Masc.
                                <input type="radio" name="sexo" value="feminino" required>Fem.
                                <input type="radio" name="sexo" value="outro" required>Outro
                                </p>
                            </div>
                        </div>

                        <div class="textfield">
                            <label for="mae-log"> Nome da mãe:</label>
                            <input type="text" name="mae-log" id="mae-log" class="nomem  required" required  oninput="nomem()">
                            <span class="span-">Nome completo</span>
                        </div>

                        <div class="textfield">
                            <label for="cpf"> CPF:</label>
                            <input type="text" name="cpf" id="cpf" class="cpff required" maxlength="14" required oninput="formatarCPF()">
                            <span class="span-">Insira um cpf válido</span>
                        </div>
                    </div>
                    
                    <div class="lado-direito">
                        <div class="textfield">
                            <label for="telcelular"> Telefone celular:</label>
                            <input type="text" name="telcelular" id="telefone" class="telefonec    required" maxlength="17" required oninput="formatarTelefone()">
                            <span class="span-">Insira um telefone válido</span>
                        </div>

                        <div class="textfield">
                            <label for="telfixo"> Telefone Fixo:</label>
                            <input type="text" name="telfixo" id="telefoneFixo" class="telefonef    required" maxlength="17" required oninput="formatarTelefone2()">
                            <span class="span-">Insira um telefone válido</span>
                        </div>

                        <div class="textfield">
                            <label for="endereco"> Endereço:</label>
                            <input type="text" name="endereco" id="endereco" class="enderecof  required" required oninput="enderecoValida()">
                            <span class="span-">Insira um endereço válido</span>
                        </div>

                        <div class="textfield">
                            <label for="nome-login">Nome login:</label>
                            <input type="text" name="nome-login" id="nome-login" class="nomel   required"  required oninput="nomelValida()">
                            <span class="span-">Insira no mínimo 6 caracteres</span>
                        </div>

                        <div class="textfield">
                            <label for="senhalogin">Senha:</label>
                            <input type="password" name="senhalogin" id="senhalogin" class="senhal   required" required   oninput="senhaValida()">
                            <span class="span-">Insira no mínimo 6 caracteres</span>

                            <label for="confirm-senha">Confirme sua senha:</label>
                            <input type="password" name="confirm-senha" id="confirm-senha" class="senhac    required" required  oninput="compareSenha()">
                            <span class="span-">A senha deve ser compatível</span>
                        </div>

                    </div>
                </div>
                
                <div class="coluna-btn">
                    <div class="btn-esquerdo">
                        <button type="submit" name="enviar" class="btn-login">Enviar</button>
                    </div>
                    <div class="btn-direito">
                        <button class="btn-limpar">Limpar</button>
                    </div>
                    <div class="btn-esquerdo">
                        <button class="btn-limpar"><a href="index.php">Voltar</a></button>
                    </div>
                    
                </div>
                 
                        
        </form>
        <div id="mensagem-erro-senha" class="mensagem-erro">As senhas não coincidem.</div>
</body>

</html>
