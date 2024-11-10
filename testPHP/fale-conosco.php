<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="css/fale-conosco.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="esquerda-nav">
                <div class="nav-logo">
                    <a href="index.php"><img src="./img/logoimg-no-undertext.png" alt=""></a>
                </div>
                <div class="barra_dividir_logo"></div>
                <a href="index.php" class="voltar">Voltar ao Início</a>
            </div>
            <a href="login.php" class="entrar" target="_blank"
            onclick="
var width = 500;
var height = 500;
var left = (screen.width / 2) - (width / 2);
var top = (screen.height / 2) - (height / 2);
window.open(this.href, 'mywin', 'width=' + width + ', height=' + height + ', top=' + top + ', left=' + left + ', toolbar=1, resizable=0');
return false;">Entrar</a>
        </nav>
    </header>

    <main class="contato-principal">
        <h1>ENTRE EM CONTATO</h1>
        <br>
        <p>Entre em contato com a gente! Ficaremos felizes em responder suas perguntas ou receber sugestões. <strong>Não se esqueça de conferir seu e-mail e celular</strong></p>
        <?php
        include('conexao.php'); // Inclui o arquivo de conexão com o banco de dados

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $assunto = $_POST['assunto'];
            $mensagem = $_POST['mensagem'];

            // Inserir os dados na tabela usando prepared statements
            $stmt = $conn->prepare("INSERT INTO tbcontato (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $nome, $email, $assunto, $mensagem);

            if ($stmt->execute()) {
                echo "<p>Mensagem enviada com sucesso!</p>";
            } else {
                echo "<p>Erro ao enviar mensagem: " . $stmt->error . "</p>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
        <form class="contato-formulario" action="fale-conosco.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Seu email" required>

            <label for="assunto">Assunto:</label>
            <input type="text" id="assunto" name="assunto" placeholder="Assunto" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" placeholder="Escreva sua mensagem aqui" required></textarea>

            <button type="submit">ENVIAR MENSAGEM</button>
        </form>
    </main>
    <footer>
        <div id="footer-top">
            <ul id="footer-menu">
                <li><a href="./quem-somos.html">Quem Somos</a></li>
                <li><a href="./fale-conosco.php">Fale Conosco</a></li>
                <li><a href="https://www.linkedin.com/">Trabalhe Conosco</a></li>
            </ul>
            <ul id="footer-social-ul">
                <li>
                    <a
                        href="https://www.instagram.com/quiosquemoana/"
                        id="footer-insta"
                    ></a>
                </li>
                <li>
                    <a href="https://www.tiktok.com" id="footer-tiktok"></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/p/quiosque-moana-100063649476127/?locale=pt_BR" id="footer-facebook"></a>
                </li>
                <li>
                    <a href="https://www.youtube.com" id="footer-youtube"></a>
                </li>
            </ul>
        </div>
        <hr />
        <div id="footer-bottom">
            <p class="copyright-text">
                Copyright © 2024 Quiosque Moana Todos os direitos reservados. Todas as
                marcas registradas são propriedade dos seus respectivos donos.
            </p>
        </div>
    </footer>
</body>
</html>
