<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="css/registro.css" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
</head>
<body>
    <main class="registro-principal">
        <h1>FAÇA O REGISTRO</h1>
        <?php
        include('conexao.php');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
            $telefone = $_POST['tel'];
            $email_check_query = "SELECT email FROM tblogin WHERE email = '$email'";
            $email_check_result = mysqli_query($conn, $email_check_query);
            if (mysqli_num_rows($email_check_result) > 0) {
                echo "<script language='javascript'>
                window.alert('Email já foi registrado, tente outro!')
                </script>";
            } else {
                $query = "INSERT INTO tblogin (email, senha, tel) VALUES ('$email', '$senha', '$telefone')";
                if (mysqli_query($conn, $query)) {
                    echo "<script language='javascript'>
                    window.alert('Registro feito com sucesso!')
                    </script>";
                } else {
                    echo "<script language='javascript'>
                    window.alert('Erro ao registrar: " . mysqli_error($conn) . "')
                    </script>";
                }
            }
        }
        ?>
        <form class="registro-formulario" action="registro.php" method="post">
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

            <label for="telefone">Telefone:</label>
            <input
                type="tel"
                id="tel"
                name="tel"
                placeholder="Seu telefone"
                minlength="10"
                maxlength="11"
                pattern="\d+"
                title="Apenas números são permitidos" 
                required
            />

            <button type="submit">REGISTRAR</button>
        </form>
        <p class="login">
        <a
            href="./login.php"
            onclick="
            var width = 500;
            var height = 500;
            var left = (screen.width / 2) - (width / 2);
            var top = (screen.height / 2) - (height / 2);
            window.open(this.href, 'mywin', 'width=' + width + ', height=' + height + ', top=' + top + ', left=' + left + ', toolbar=1, resizable=0');
            return false;"
        >Já tem uma conta? Faça login aqui!</a>
        </p>
    </main>
</body>
</html>
