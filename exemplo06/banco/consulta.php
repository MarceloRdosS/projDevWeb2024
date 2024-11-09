<?php
    include 'conexao.php';
    $sql = 'SELECT id, nome, idade, salario, data_nasc FROM tbpessoa ORDER BY nome';
    echo "<table border='1'>";
    echo "<caption>Consulta aos dados das pessoas cadastradas</caption>";
    echo "<thead><tr><th>Nome</th><th>idade</th><th>Salario</th>
        <th>Nascimento</th><th colspan='2'>Operações</th></tr></thead><tbody>";
    //ler cada linha de registro da consulta
    foreach ($con->query($sql) as $row) {
        echo "<tr><td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['idade'] . "</td>";
        echo "<td>" . $row['salario'] . "</td>";
        echo "<td>" . date('d/m/Y',strtotime($row['data_nasc'])) . "</td>";
        echo "<td><a href=editar.php?id=" . $row['id'] . ">Editar</a></td>";
        echo "<td><a href=excluir.php?id=" . $row['id'] . ">Excluir</a></td></tr>";
    }
    echo "</tbody></table>" ;
?>
