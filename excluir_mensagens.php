<?php
include('conexao.php');
session_start();

if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 'admin') {
    header('Location: login.php');
    exit();
}

// Excluir todas as mensagens de contato
$query = "DELETE FROM tbcontato";
if (mysqli_query($conn, $query)) {
    header('Location: admin.php');
    exit();
} else {
    echo "Erro ao excluir mensagens: " . mysqli_error($conn);
}
?>
