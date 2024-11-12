<?php
include('conexao.php');
$cel = $_GET['celular'];
$query_nome = "SELECT nome_do_casal FROM tbevento WHERE celular = '$cel'";
$result_nome = mysqli_query($conn, $query_nome);
if ($result_nome) {
    $row = mysqli_fetch_assoc($result_nome);
    $nome_do_casal = $row['nome_do_casal'];
    $query_delete = "DELETE FROM tbevento WHERE celular = '$cel'";
    if (mysqli_query($conn, $query_delete)) {
        echo "<script language='javascript'>
            window.alert('Registro de $nome_do_casal excluído com sucesso!');
            window.location.href = 'admin.php';
            </script>";
    } else {
        echo "Erro ao excluir registro: " . mysqli_error($conn);
    }
} else {
    echo "Erro ao buscar o nome do casal: " . mysqli_error($conn);
}
?>
