<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Aula11 - Projeto BD</title>
    </head>
    <body>
        <h1>Formulário para a inclusão de dados</h1>
        <form action="banco/insere.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" 
                   placeholder="Digite seu nome">
            <br /><br />
            <label for=idade> Idade:</label>
            <input type="number" id="idade" name="idade" 
                   placeholder="Digite sua idade">
            <br /><br />
            <label for="salario"> Salário:</label>
            <input type="number" id="salario" name="salario" step="0.01"
                   placeholder="Digite seu salario">
            <br /><br />
            <label for=data> Data de nascimento:</label>
            <input type="date" id="data" name="data_nasc" 
                   placeholder="Digite sua data de nascimento">
            <br /><br />
            <input type="submit" value="Salvar dados">
        </form>
    </body>
</html>
