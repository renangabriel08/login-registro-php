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

    <title>Login</title>
</head>
<body>
    <section class="login">

        <div class="imagem-login">
            <h2>WELCOME TO OUR WEBSITE!</h2>
            <h3>Log in to check out our incredible products ideal for decorating the interior of your home. Check out our unmissable promotions!</h3>
        </div>

        <form action="./configLogin.php" method="POST">
        <div class="informacoes-login">
            <h2>LOGIN</h2>
            <h3 class="mensagem">It is mandatory to have an account to access our website. Fill in your information according to the registered ones, if you don't have an account you can create one.</h3>
            <div class="infos">
                <input type="email" name="email" class="email" placeholder="Type your e-mail">
                <input type="password" name="senha" class="senha" placeholder="Type your password">
            </div>
            <h3 class="sem-conta">Don't have an account? <a href="./register.php">Register</a></h3>
            <input type="submit" name="submit" value="Log in" class="entrar">
        </div>
        </form>

    </section>
</body>
</html>