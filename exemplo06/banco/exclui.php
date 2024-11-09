<?php
    include 'conexao.php';
    $id = $_POST['id'];
    $sql = "delete from tbpessoa where id=$id ";
    $count = $con->exec($sql);
    echo "<p> $count registro foi removido</p>";
    echo "<a href='consulta.php'>Consultar dados</a>";
?>