<?php

include 'sessao.php';

//abrir a conexão com o BD
include 'conexao.php';

//ler os dados do formulário
$placa = $_POST['txtPlaca'];
$fabricante = $_POST['txtFabricante'];
$marca = $_POST['txtMarca'];
$ano = $_POST['txtAno'];
$cor = $_POST['txtCor'];
$nome = $_POST['txtNome'];
$idade = $_POST['txtIdade'];
$telefone = $_POST['txtTelefone'];

echo "<h1>Inserção de dados</h1>";
echo "<h3>Usuário: $logado</h3>";
//definir o comando SQL para inserir
$sql = "insert into tbveiculo(placa, fabricante, marca, ano, cor)
            values('$placa', '$fabricante', '$marca', $ano,'$cor') ";
$sql2 = "insert into tbcliente(nome, idade, telefone, carroplaca)
            values('$nome', $idade, '$telefone', '$placa') ";

//executar primeiro a consulta de placa existente
$sql3 = "SELECT * FROM tbveiculo WHERE placa='$placa'";
if ($con->query($sql3)->rowCount() == 0) {
    //executar o comando SQL
    $count = $con->exec($sql);
    $count += $con->exec($sql2);
    //exibir o resultado
    echo "<h3> $count registro(s) incluído(s)</h3>";
} else {
    echo "<h3>Placa: $placa já cadastrada !!!</h3>";
}
echo "<h3><a href='consulta.php'>Consultar dados</a></h3>";
?>