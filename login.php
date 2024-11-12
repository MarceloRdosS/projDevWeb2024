<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
    <script src="./script/admin.js"></script>
</head>
<body>
    <main class="login-principal">
        <h1>FAÇA O LOGIN</h1>
        <?php
        session_start();
        include('conexao.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $query = "SELECT * FROM tblogin WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            $user = mysqli_fetch_assoc($result);
            if ($user && password_verify($senha, $user['senha'])) {
                $_SESSION['cargo'] = $user['cargo'];
                if ($user['cargo'] == 'admin') {
                    echo "<script>abrirAdm();</script>";
                } else {
                    header('Location: servicos.php');
                }
                exit();
            } else {
                echo "<p>Email ou senha incorretos.</p>";
            }
        }
        ?>
        <form class="login-formulario" action="login.php" method="post">
            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Seu email"
                required
            />

            <label for="senha">Senha:</label>
            <input
                type="password"
                id="senha"
                name="senha"
                placeholder="Sua senha"
                minlength="5"
                required
            />

            <button type="submit">ENTRAR</button>
        </form>
        <p class="registro">
        <a
						href="./registro.php"
						onclick="
        var width = 500;
        var height = 500;
        var left = (screen.width / 2) - (width / 2);
        var top = (screen.height / 2) - (height / 2);
        window.open(this.href, 'mywin', 'width=' + width + ', height=' + height + ', top=' + top + ', left=' + left + ', toolbar=1, resizable=0');
        return false;"
					>
                    Não tem conta? Registre-se aqui!
                    </a>
        </p>
    </main>
</body>
</html>
