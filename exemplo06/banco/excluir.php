<?php
    include 'conexao.php';
    $id = $_GET['id'];
    $sql = "SELECT id, nome, idade, salario, data_nasc FROM tbpessoa where id=$id";
    echo "<html><body><h1>Exclusão</h1><form action='exclui.php' method='post'>";
    foreach ($con->query($sql) as $row) {
        echo "<input type='hidden' name='id' value='$id'>";
        echo "<label for='nome'>Nome:</label>";
        echo "<input type='text' id='nome' name='nome' value='" . $row['nome'] . "' readonly>";
        echo "<br /><br />";
        echo "<label for='idade'>Idade:</label>";
        echo "<input type='text' id='idade' name='idade' value='" . $row['idade'] . "' readonly>";
        echo "<br /><br />";
        echo "<label for='salario'> Salário:</label>";
        echo "<input type='text' id='salario' name='salario' value='" . $row['salario'] . "' readonly>";
        echo "<br /><br />";
        echo "<label for='data_nascimento'>Data de nascimento:</label>";
        echo "<input type='text' id='data_nasc' name='data_nasc' "
        . "value='" . date('d/m/Y', strtotime($row['data_nasc'])) . "'readonly'>";
        echo "<br /><br />";
        echo "<input type='submit' value='Apagar registro'>";
    }
    echo "</form></body></html>";
?>