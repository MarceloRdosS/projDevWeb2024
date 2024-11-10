<?php
include('conexao.php'); // Inclui o arquivo de conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_casal = $_POST['nome_do_casal'];
    $celular = $_POST['celular'];
    $data_evento = $_POST['data_do_evento'];
    $numero_convidados = $_POST['numero_de_convidados'];
    $informacoes = $_POST['mais_informacoes'];

    // Inserir os dados na tabela evento
    $query = "INSERT INTO tbevento (celular, nome_do_casal, data_do_evento, numero_de_convidados, mais_informacoes) 
              VALUES ('$celular', '$nome_casal', '$data_evento', '$numero_convidados', '$informacoes')";
    
    if (mysqli_query($conn, $query)) {
        echo "Orçamento adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar orçamento: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Orçamento</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Adicionar Orçamento</h1>
        <form action="adicionar_orcamento.php" method="post">
        <div class="form-group">
                <label for="nomeCasal">Nome do Casal:</label>
                <input type="text" class="form-control" id="nome_do_casal" name="nome_do_casal" required>
            </div>
            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" required>
            </div>
            <div class="form-group">
                <label for="data_do_evento">Data do Evento:</label>
                <input type="date" class="form-control" id="data_do_evento" name="data_do_evento" required>
            </div>
            <div class="form-group">
                <label for="numero_de_convidados">Número de Convidados:</label>
                <select class="form-control" id="numero_de_convidados" name="numero_de_convidados" required>
                    <option value="0-100">0-100</option>
                    <option value="100-150">100-150</option>
                    <option value="150-200">150-200</option>
                    <option value="200-250">200-250</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mais_informacoes">Informações Adicionais:</label>
                <textarea class="form-control" id="mais_informacoes" name="mais_informacoes" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Adicionar</button>
            <a href="./admin.php" class="btn btn-info">Voltar</a>
        </form>
    </div>
</body>
</html>
