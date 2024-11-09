<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";

    try {
        $con = new PDO("mysql:host=$servidor;dbname=bdteste", $usuario, $senha);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão OK"; //pode remover depois de testar
    } catch (PDOException $e) {
        echo "Erro na conexao: " . $e->getMessage();
    }
?>
