<?php
include 'sessao.php';
include 'conexao.php';
$sql = 'SELECT * FROM tbveiculo,tbcliente WHERE placa=carroplaca ORDER BY placa';
echo "<html><body><h1>Consulta de Veículos</h1>";
echo "<h3>Usuário: $logado</h3>";
echo "<form action='pesquisar.php' method='post'>";
echo "<label>Digite uma placa </label>";
echo "<input type='text' name='txtPlaca' />";
echo "<input type='submit' value='Pesquisar' />";
echo "</form><table border='1'><caption>Veículos cadastrados</caption>";
echo "<tr><th>Placa</th><th>Fabricante</th><th>Marca</th>
        <th>Ano</th><th>Cor</th><th>Nome</th><th>Idade</th>
        <th colspan='2'>Operações</th></tr>";
//ler cada linha de registro da consulta
foreach ($con->query($sql) as $row) {
    echo "<tr><td>" . $row['placa'] . "</td>";
    echo "<td>" . $row['fabricante'] . "</td>";
    echo "<td>" . $row['marca'] . "</td>";
    echo "<td>" . $row['ano'] . "</td>";
    echo "<td>" . $row['cor'] . "</td>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['idade'] . "</td>";
    echo "<td><a href=editar.php?placa=" . $row['placa'] . ">Editar</a></td>";
    echo "<td><a href=excluir.php?placa=" . $row['placa'] . ">Excluir</a></td></tr>";
}
echo "<tr><td colspan='9' align='center'><a href='../cadastro.php'>Inserir</a></td></table>";
echo "</body></html>";
?>
