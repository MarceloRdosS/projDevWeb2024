<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $cargo = $_POST['cargo'];
    if (!empty($_POST['senha'])) {
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $query = "UPDATE tblogin SET senha='$senha', tel='$tel', cargo='$cargo' WHERE email='$email'";
    } else {
        $query = "UPDATE tblogin SET tel='$tel', cargo='$cargo' WHERE email='$email'";
    }
    if (mysqli_query($conn, $query)) {
        header('Location: admin.php');
        exit();
    } else {
        echo "Erro ao editar usuário: " . mysqli_error($conn);
    }
}

$email = $_GET['email'];
$query = "SELECT * FROM tblogin WHERE email = '$email'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Editar Usuário</h1>
        <form action="editar.php" method="post">
            <input type="hidden" name="email" value="<?php echo $user['email']; ?>">
            <div class="form-group">
                <label for="tel">Telefone:</label>
                <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $user['tel']; ?>" required>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo:</label>
                <select class="form-control" id="cargo" name="cargo">
                    <option value="admin" <?php if($user['cargo'] == 'admin') echo 'selected'; ?>>Admin</option>
                    <option value="usuario" <?php if($user['cargo'] == 'usuario') echo 'selected'; ?>>Usuário</option>
                </select>
            </div>
            <div class="form-group">
                <label for="senha">Nova Senha (opcional):</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>
