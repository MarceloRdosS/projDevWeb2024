<?php
include 'sessao.php';
include 'conexao.php';

$placa = $_POST['txtPlaca'];
$fabricante = $_POST['txtFabricante'];
$marca = $_POST['txtMarca'];
$ano = $_POST['txtAno'];
$cor = $_POST['txtCor'];
$nome = $_POST['txtNome'];
$idade = $_POST['txtIdade'];
$telefone = $_POST['txtTelefone'];
$idade = $_POST['txtIdade'];
$sql = "update tbveiculo set fabricante='$fabricante', marca='$marca', ano=$ano, "
        . "cor='$cor' where placa='$placa' ";
$sql2 = "update tbcliente set nome='$nome', idade=$idade, telefone='$telefone'"
        . " where carroPlaca='$placa' ";
$count = $con->exec($sql);
$count += $con->exec($sql2);
echo "<html><body><h1>Alteração de dados</h1>";
echo "<h3>Usuário: $logado</h3>";
echo "<h3> $count registro(s) atualizado(s)</h3>";
echo "<h3><a href='consulta.php'>Consultar dados</a></h3>";
echo "</body></html>";
?>
