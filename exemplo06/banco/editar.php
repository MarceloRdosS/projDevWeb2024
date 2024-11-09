<?php
    include 'conexao.php';
    $id = $_GET['id'];
    $sql = "SELECT id, nome, idade, salario, data_nasc FROM tbpessoa where id=$id";
    echo "<html><body><h1>Alteração</h1>";
    echo "<form action='edita.php' method='post'>";
    foreach ($con->query($sql) as $row) {
        echo "<input type='hidden' name='id' value='$id'>";
        echo "<label for='nome'>Nome:</label>";
        echo "<input type='text' id='nome' name='nome' "
        . "placeholder='Digite seu nome' value='" . $row['nome'] . "' >";
        echo "<br /><br />";
        echo "<label for='idade'> Idade:</label>";
        echo "<input type='number' id='idade' name='idade' "
        . "placeholder='Digite sua idade' value='" . $row['idade'] . "' >";
        echo "<br /><br />";
        echo "<label for='salario'> Salário:</label>";
        echo "<input type='number' id='salario' name='salario' step='0.01' "
        . "placeholder='Digite seu salario' value='" . $row['salario'] . "'>";
        echo "<br /><br />";
        echo "<label for='data_nascimento'> Data de nascimento:</label>";
        echo "<input type='date' id='data' name='data_nasc' "
        . "placeholder='Digite sua data de nascimento' "
        . "value='" . $row['data_nasc'] . "'>";
        echo "<br /><br />";
        echo "<input type='submit' value='Salvar dados'>";
    }
    echo "</form></body></html>";
?>