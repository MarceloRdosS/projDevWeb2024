<?php
//verifica o login na sessão
session_start();
if ((isset($_SESSION['login']) == false)) {
    unset($_SESSION['login']);
    header('location:../index.php');
}
//ler o login da sessão
$logado = $_SESSION['login'];
