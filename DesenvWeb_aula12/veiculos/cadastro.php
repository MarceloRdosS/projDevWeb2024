<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Cadastro de Veículos</title>
    </head>
    <body>
        <?php
        //verifica o login na sessão
        session_start();
        if ((isset($_SESSION['login']) == false)) {
            unset($_SESSION['login']);
            header('location:index.php');
        }
        //ler o login da sessão
        $logado = $_SESSION['login'];
        ?>
        <h1>Cadastro de Veículos</h1>
        <h3>Usuário: <?php echo $logado; ?></h3>
        <form action="banco/insere.php" method="post">
            <fieldset>
                <legend>Dados do Veículo</legend>
                <label>Placa</label>
                <input type="text" id="txtPlaca" name="txtPlaca" 
                       required="required"
                       pattern="[A-Z]{3}[0-9]{1}[A-Z]{1}[0-9]{2}|[A-Z]{3}[0-9]{4}"
                       autofocus="autofocus"/>
                <br /><br />
                <label>Fabricante</label>
                <input type="text" id="txtFabricante" name="txtFabricante" />
                <br /><br />
                <label>Marca</label>
                <input type="text" id="txtMarca" name="txtMarca" />
                <br /><br />
                <label>Ano</label>
                <input type="number" id="txtAno" name="txtAno" value="2019"/>
                <br /><br />
                <label>Cor</label>
                <input type="text" id="txtCor" name="txtCor" />
            </fieldset>
            <br />
            <fieldset>
                <legend>Dados do Cliente</legend>
                <label>Nome</label>
                <input type="text" id="txtNome" name="txtNome" />
                <br /><br />
                <label>Idade</label>
                <input type="number" id="txtIdade" name="txtIdade" />
                <br /><br />
                <label>Telefone</label>
                <input type="text" id="txtTelefone" name="txtTelefone" />
            </fieldset>
            <br />
            <input type="submit" value="Salvar">
            <input type="button" value="Listar" onclick="window.location.href = 'banco/consulta.php';">
        </form>
    </body>
</html>
