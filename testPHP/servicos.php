<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faça O Seu Orçamento Grátis</title>
    <link rel="stylesheet" href="css/servicos.css" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
</head>
<body>
    <main class="login-principal">
        <h1>Peça o seu orçamento</h1>
        <p>Faça o seu <b>orçamento grátis</b> e logo entraremos em contato</p>
        <?php
        include('conexao.php'); // Inclui o arquivo de conexão com o banco de dados

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome_casal = $_POST['nomeCasal'];
            $celular = $_POST['celular'];
            $data_evento = $_POST['data'];
            $numero_convidados = $_POST['convidados'];
            $mais_informacoes = $_POST['mensagem'];

            // Inserir os dados na tabela
            $query = "INSERT INTO evento (nome_do_casal, celular, data_do_evento, numero_de_convidados, mais_informacoes)
                      VALUES ('$nome_casal', '$celular', '$data_evento', '$numero_convidados', '$mais_informacoes')";
            
            if (mysqli_query($conn, $query)) {
                echo "<p>Formulário enviado com sucesso!</p>";
            } else {
                echo "<p>Erro ao enviar formulário: " . mysqli_error($conn) . "</p>";
            }
        }
        ?>
        <form class="login-formulario" method="post">
            <label for="nomeCasal">Nome do Casal: <span class="red">*</span></label>
            <input
                type="text"
                id="nomeCasal"
                name="nomeCasal"
                placeholder="Nomes Completos"
                required
            />

            <label for="celular">Celular: <span class="red">*</span></label>
            <input
                type="tel"
                name="celular"
                id="celular"
                placeholder="Celular para Contato"
                required
                maxlength="11"
            />
            <div id="dataArea">
                <label for="data">Data do evento:</label>
                <input type="date" name="data" id="data" required />
            </div>
            <label for="convidados">Número de convidados</label>
            <div id="radioArea">
                <input
                    type="radio"
                    id="0-100"
                    name="convidados"
                    value="0-100"
                    class="radio-input"
                    required
                />
                <label for="0-100" class="radio-label">0-100</label>

                <input
                    type="radio"
                    id="100-150"
                    name="convidados"
                    value="100-150"
                    class="radio-input"
                />
                <label for="100-150" class="radio-label">100-150</label>

                <input
                    type="radio"
                    id="150-200"
                    name="convidados"
                    value="150-200"
                    class="radio-input"
                />
                <label for="150-200" class="radio-label">150-200</label>

                <input
                    type="radio"
                    id="200-250"
                    name="convidados"
                    value="200-250"
                    class="radio-input"
                />
                <label for="200-250" class="radio-label">200-250</label>
            </div>
            <label for="mensagem">Peça mais informações</label>
            <textarea name="mensagem" id="mensagem"></textarea>
            <button type="submit">Enviar Formulário</button>
        </form>
    </main>
</body>
</html>
