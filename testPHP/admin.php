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
    <meta name="description" content="Quiosque Moana é um local à beira-mar para realização de eventos e casamentos.">
    <meta name="keywords" content="Quiosque, Moana, evento, casamento, praia, Rio de Janeiro">
    <title>Painel do Administrador - Quiosque Moana</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/indexcss.css">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
        font-family: "Arial", sans-serif;
        background: url('./img/moana-background.jpg') no-repeat center center fixed;
        background-size: cover;
    }

    #navbar {
        background-color: #024059; 
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed; 
        top: 0;
        left: 0;
        width: 100%;
        z-index: 999; 
    }

    #navbar img {
        height: 50px; 
        width: auto;
    }

    #menu {
        list-style: none;
        display: flex;
    }

    #menu li {
        margin-left: 20px;
    }

    #menu li a {
        text-decoration: none;
    }

    #voltarBtn {
        color: gold; 
        border: 2px solid gold; 
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    #voltarBtn:hover {
        background-color: gold; 
        color: #024059; 
    }

    .wrapper {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding: 40px 20px;
        flex: 1; 
        margin-top: 80px; /* Espaço para o navbar fixo */
    }

    .container {
        max-width: 900px;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.95);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
        color: #024059;
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group label {
        color: #024059;
    }

    .btn-success {
        background-color: #024059;
        border: none;
        width: 100%;
        padding: 10px;
    }

    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
        padding: 10px;
        background-color: #024059; 
        color: gold;
    }
</style>

</head>
<body>
    <nav id="navbar">
        <a href="./index.php"><img src="./img/logoimg-no-undertext.png" alt="Quiosque Moana Logo"></a>
        <ul id="menu">
            <li><a href="./index.php"><button id="voltarBtn">Voltar</button></a></li>
        </ul>
    </nav>

    <div class="wrapper">
        <div class="container">
            <h1>Painel do Administrador</h1>
            <a href="adicionar.php" class="btn btn-success mb-3">Adicionar Usuário</a>
            <table class="table table-bordered table-responsive">
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
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['senha']); ?></td>
                            <td><?php echo htmlspecialchars($row['tel']); ?></td>
                            <td><?php echo htmlspecialchars($row['cargo']); ?></td>
                            <td>
                                <a href="editar.php?email=<?php echo urlencode($row['email']); ?>" class="btn btn-primary">Editar</a>
                                <a href="excluir.php?email=<?php echo urlencode($row['email']); ?>" class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Quiosque Moana. Todos os direitos reservados.</p>
    </footer>

    <script>
        function openFullscreen() {
            const elem = document.documentElement;
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) {
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) {
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) {
                elem.msRequestFullscreen();
            }
        }
    </script>
</body>
</html>
