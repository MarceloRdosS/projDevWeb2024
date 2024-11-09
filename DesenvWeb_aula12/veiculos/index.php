<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Cadastro de Veículos</title>
    </head>
    <body>
        <h1>Cadastro de Veículos</h1>
        <form action="banco/login.php" method="post">
            <fieldset>
                <legend>Dados do Login</legend>
                <label>Login</label>
                <input type="text" id="txtLogin" name="txtLogin" 
                       required="required" placeholder="Digite o login" 
                       autocomplete="off" autofocus="autofocus"/>
                <br /><br />
                <label>Senha</label>
                <input type="password" id="txtSenha" name="txtSenha" 
                       placeholder="Digite a senha"/>
                <input type="submit" value="Acessar" name='btnAcessar'>
            </fieldset>
        </form>
    </body>
</html>
