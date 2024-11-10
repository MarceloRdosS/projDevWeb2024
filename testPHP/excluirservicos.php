<?php
include('conexao.php');

$cel = $_GET['celular'];
$query = "DELETE FROM tbevento WHERE celular = '$cel'";

if (mysqli_query($conn, $query)) {
    header('Location: admin.php');
    exit();
} else {
    echo "Erro ao excluir registro: " . mysqli_error($conn);
}
?>
