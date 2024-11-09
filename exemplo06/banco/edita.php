<?php
    include 'conexao.php';
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $salario = $_POST['salario'];
    $nascimento = $_POST['data_nasc'];
    $sql = "update tbpessoa set nome='$nome', idade=$idade, salario=$salario, "
            . "data_nasc='$nascimento' where id=$id ";
    $count = $con->exec($sql);
    echo "<p> $count registro foi atualizado</p>";
    echo "<a href='consulta.php'>Consultar dados</a>";
?>
