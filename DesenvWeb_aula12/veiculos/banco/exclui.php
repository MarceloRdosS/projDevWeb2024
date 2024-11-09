<?php

include 'sessao.php';
include 'conexao.php';
$placa = $_POST['txtPlaca'];
$sql = "delete from tbcliente where carroPlaca='$placa'";
$sql2 = "delete from tbveiculo where placa='$placa'";
$count = $con->exec($sql);
$count += $con->exec($sql2);
echo "<html><body><h1>Exclusão de dados</h1>";
echo "<h3>Usuário: $logado</h3>";
echo "<h3> $count registro(s) removido(s)</h3>";
echo "<h3><a href='consulta.php'>Consultar dados</a></h3>";
echo "</body></html>";
?>