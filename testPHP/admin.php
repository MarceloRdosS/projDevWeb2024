<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 'admin') {
    header('Location: login.php');
    exit();
}

include('conexao.php');

$query = "SELECT * FROM tblogin";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden; /* Remove barras de rolagem */
        }
        .container {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body onload="openFullscreen();">
    <div class="container">
        <h1 class="mt-5">Painel do Administrador</h1>
        <a href="adicionar.php" class="btn btn-success mb-3">Adicionar Usuário</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Telefone</th>
                    <th>Cargo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['senha']; ?></td>
                        <td><?php echo $row['tel']; ?></td>
                        <td><?php echo $row['cargo']; ?></td>
                        <td>
                            <a href="editar.php?email=<?php echo $row['email']; ?>" class="btn btn-primary">Editar</a>
                            <a href="excluir.php?email=<?php echo $row['email']; ?>" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script>
        function openFullscreen() {
            var elem = document.documentElement;
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) { // Firefox 
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) { // Chrome, Safari and Opera 
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { // IE/Edge 
                elem.msRequestFullscreen();
            }
        }
    </script>
</body>
</html>
