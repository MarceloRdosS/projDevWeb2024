<?php
include('conexao.php');
session_start();
if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 'admin') {
    header('Location: login.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tel = $_POST['tel'];
    $cargo = $_POST['cargo'];

    $query = "INSERT INTO tblogin (email, senha, tel, cargo) VALUES ('$email', '$senha', '$tel', '$cargo')";
    if (mysqli_query($conn, $query)) {
        header('Location: admin.php');
        exit();
    } else {
        echo "Erro ao adicionar usuário: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuário - Quiosque Moana</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body style="margin: 0; font-family: Arial, sans-serif; background: url('./img/moana-background.jpg') no-repeat center center fixed; background-size: cover; height: 100%; display: flex; flex-direction: column;">

    <nav id="navbar" style="background-color: #024059; padding: 10px 20px; display: flex; justify-content: space-between; align-items: center; position: fixed; top: 0; left: 0; width: 100%; z-index: 999;">
        <a href="./index.php">
            <img src="./img/logoimg-no-undertext.png" alt="Quiosque Moana Logo" style="height: 50px; width: auto;">
        </a>
        <ul id="menu" style="list-style: none; display: flex;">
            <li style="margin-left: 20px;">
                <a href="./admin.php">
                    <button id="infoBtn" style="color: gold; border: 2px solid gold; padding: 10px 20px; border-radius: 5px; font-weight: bold; cursor: pointer; transition: all 0.3s ease; background-color: transparent;">Voltar</button>
                </a>
            </li>
        </ul>
    </nav>

    <div class="wrapper" style="display: flex; justify-content: center; align-items: flex-start; padding: 40px 20px; flex: 1; margin-top: 80px;">
        <div class="container" style="max-width: 900px; width: 100%; background-color: rgba(255, 255, 255, 0.95); padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
            <h1 style="color: #024059; text-align: center; margin-bottom: 20px;">Adicionar Usuário</h1>
            <form action="adicionar.php" method="post">
                <div class="form-group">
                    <label for="email" style="color: #024059;">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required style="border-radius: 5px;">
                </div>
                <div class="form-group">
                    <label for="senha" style="color: #024059;">Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha" minlength="4" required style="border-radius: 5px;">
                </div>
                <div class="form-group">
                    <label for="tel" style="color: #024059;">Telefone:</label>
                    <input type="tel" class="form-control" id="tel" name="tel" pattern="\d+" title="Apenas números são permitidos" minlength="10" maxlength="11" required style="border-radius: 5px;">
                </div>
                <div class="form-group">
                    <label for="cargo" style="color: #024059;">Cargo:</label>
                    <select class="form-control" id="cargo" name="cargo" style="border-radius: 5px;">
                        <option value="admin">Admin</option>
                        <option value="usuario">Usuário</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success" style="background-color: #024059; border: none; width: 100%; padding: 10px; color: white; font-weight: bold; border-radius: 5px;">Adicionar</button>
            </form>
        </div>
    </div>

    <footer style="position: fixed; bottom: 0; width: 100%; text-align: center; padding: 10px; background-color: #024059; color: gold;">
        <p>&copy; 2024 Quiosque Moana. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
