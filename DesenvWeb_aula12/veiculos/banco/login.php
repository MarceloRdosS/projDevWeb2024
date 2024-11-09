<?php

//iniciar a sessão
session_start() ;

//abrir a conexão com o BD
include 'conexao.php';

//ler os dados do formulário
$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha'];
echo "<html><body><h1>Login de acesso</h1>";
//se o botão foi clicado
if (isset($_POST['btnAcessar'])) {
    //executar a consulta de login
    $sql = "SELECT * FROM tblogin WHERE login='$login' AND senha='$senha'";
    //se foram zero registros retornados
    if ($con->query($sql)->rowCount() == 0) {
        echo "<h3>Login e/ou senha inválidos !!!</h3>";
        echo "<h3><a href='../index.php'>Retornar</a></h3>";
        //desativa o login da sessão
        unset ($_SESSION['login']);
        //redireciona após 5 segundos
        header("Refresh: 5;url=../index.php");
    } else { //validado o login
        //armazena na sessão
        $_SESSION['login'] = $login;
        //redireciona automaticamente
        header("location:consulta.php");
    }
}
?>