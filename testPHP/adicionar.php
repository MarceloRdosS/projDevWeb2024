<?php
include('conexao.php');

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
    <title>Adicionar Usuário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Adicionar Usuário</h1>
        <form action="adicionar.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <div class="form-group">
                <label for="tel">Telefone:</label>
                <input type="text" class="form-control" id="tel" name="tel" required>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <select class="form-control" id="cargo" name="cargo">
                    <option value="admin">Admin</option>
                    <option value="usuario">Usuário</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Adicionar</button>
        </form>
    </div>
</body>
</html>
