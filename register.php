<?php

    if (isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $nascimento = $_POST['nascimento'];
        $genero = $_POST['genero'];
        $emailCadastrado = "This email has already been registered, login";
        $telCadastrado = "This phone has already been registered, try another one";

        $sqlEmail = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultEmail = $conexao->query($sqlEmail);

        $sqlTelefone = "SELECT * FROM usuarios WHERE telefone = '$telefone'";
        $resultTelefone = $conexao->query($sqlTelefone);

        if (mysqli_num_rows($resultEmail) > 0)
        {
            echo '<script>alert("'.$emailCadastrado.'");</script>';
        }
        else if (mysqli_num_rows($resultTelefone) > 0) 
        {
            echo '<script>alert("'.$telCadastrado.'");</script>';
        }
        else
        {
            $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone, data_nasc, genero) 
            VALUES ('$nome', '$email', '$senha', '$telefone', '$nascimento', '$genero')");

            header('Location: login.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Nunito+Sans&family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">

    <title>Register</title>
</head>
<body>
    <section class="login">

        <div class="imagem-login">
            <h2>WELCOME TO OUR WEBSITE!</h2>
            <h3>Register to check out our incredible products ideal for decorating the interior of your home. Check out our unmissable promotions!</h3>
        </div>

        <div class="informacoes-login">
            <form action="register.php" method="post">

                <h2>register</h2>
                <h3 class="mensagem">It is mandatory to have an account to access our website. Fill in your information as required to create your account.</h3>
                <div class="infos">
                    <input type="text" name="nome" class="nome" placeholder="Type your name" required>
                    <input type="email" onblur="validacaoEmail(f1.email)" name="email" class="email" placeholder="Type your e-mail" required>
                    <input type="password" name="senha" class="senha" placeholder="Type your password" required>
                    <input type="tel" minlength="11" maxlength="15" onkeyup="handlePhone(event)" name="telefone" id="telefone" placeholder="Enter your phone" required> 
                    <input type="date" name="nascimento" id="nascimento" required>
    
                    <div class="sexo">
                        <p>Gender</p>
                        <div class="box-sexo">
                            <input type="radio" id="feminino" name="genero" value="feminino" required>
                            <label for="feminino">Female</label>
                        </div>
                    <br>
                        <div class="box-sexo">
                            <input type="radio" id="masculino" name="genero" value="masculino" required>
                            <label for="masculino">Male</label>
                        </div>
                    <br>
                        <div class="box-sexo">
                            <input type="radio" id="outro" name="genero" value="outro" required>
                            <label for="outro">Other</label>                        
                        </div>
                    </div>
                </div>
                <h3 class="sem-conta">Already got an account? <a href="./login.php">Log in</a></h3>
                <input type="submit" name="submit" id="submit" value="Register">

            </form>
        </div>
    </section>
    <script src="./js/telefone.js"></script>
</body>
</html>