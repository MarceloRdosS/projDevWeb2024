<?php
include('conexao.php');

$email = $_GET['email'];
$query = "DELETE FROM tblogin WHERE email = '$email'";

if (mysqli_query($conn, $query)) {
    header('Location: admin.php');
    exit();
} else {
    echo "Erro ao excluir usuário: " . mysqli_error($conn);
}
?>
