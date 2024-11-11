<?php
include('conexao.php');
session_start();
if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 'admin') {
header('Location: login.php');
exit(); }
$query_users = "SELECT * FROM tblogin";
$result_users = mysqli_query($conn, $query_users);

$query_orcamentos = "SELECT * FROM tbevento";
$result_orcamentos = mysqli_query($conn, $query_orcamentos);

$query_contatos = "SELECT * FROM tbcontato";
$result_contatos = mysqli_query($conn, $query_contatos);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Quiosque Moana é um local à beira-mar para realização de eventos e casamentos.">
    <meta name="keywords" content="Quiosque, Moana, evento, casamento, praia, Rio de Janeiro">
    <title>Painel do Administrador - Quiosque Moana</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/indexcss.css">
    <link rel="stylesheet" href="./css/admin.css">
    <script src="./script/admin.js"></script>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

</head>
<body>
    <nav id="navbar">
        <img src="./img/logoimg-no-undertext.png" alt="Quiosque Moana Logo">
        <ul id="menu">
            <li><button id="voltarBtn" onclick="fecharPag()">Voltar</button></li>
        </ul>
    </nav>

    <div class="wrapper d-flex flex-column col-12">
        <div class="container"><h1>Painel do Administrador</h1>
            <div class="container col-12">
                <h2 class="d-flex justify-content-center">Usuários Registrados</h2>
                <table class=" table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Cargo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result_users)): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['tel']); ?></td>
                                <td><?php echo htmlspecialchars($row['cargo']); ?></td>
                                <td>
                                    <a href="editar.php?email=<?php echo urlencode($row['email']); ?>" class="btn btn-primary">Editar</a>
                                    <a href="excluirlogin.php?email=<?php echo urlencode($row['email']); ?>" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <a href="adicionar.php" class="btn btn-success mb-3">Adicionar Usuário</a>
            </div>

            <div class="container">
                <h2 class="d-flex justify-content-center">Orçamentos Solicitados</h2>
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Nome do Casal</th>
                            <th>Celular</th>
                            <th>Data do Evento</th>
                            <th>Número de Convidados</th>
                            <th>Informações adicionais</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result_orcamentos)): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['nome_do_casal']); ?></td>
                                <td><?php echo htmlspecialchars($row['celular']); ?></td>
                                <td><?php echo htmlspecialchars($row['data_do_evento']); ?></td>
                                <td><?php echo htmlspecialchars($row['numero_de_convidados']); ?></td>
                                <td><?php echo htmlspecialchars($row['mais_informacoes']); ?></td>
                                <td><a href="excluirservicos.php?celular=<?php echo urlencode($row['celular']); ?>" class="btn btn-danger">Excluir</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <a href="adicionar_orcamento.php" class="btn btn-success mb-3">Adicionar Orçamento</a>
            </div>

            <div class="container">
                <h2 class="d-flex justify-content-center">Contatos Recebidos</h2>
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Assunto</th>
                            <th>Mensagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result_contatos)): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['nome']); ?></td>
                                <td><?php echo htmlspecialchars($row['email']); ?></td>
                                <td><?php echo htmlspecialchars($row['assunto']); ?></td>
                                <td><?php echo htmlspecialchars($row['mensagem']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    
    </div>

    <footer>
        <p>&copy; 2024 Quiosque Moana. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
