<?php

include 'sessao.php';
include 'conexao.php';

$placa = $_GET['placa'];
$sql = "SELECT tbveiculo.*,tbcliente.* FROM tbveiculo
INNER JOIN tbcliente ON tbcliente.carroPlaca = tbveiculo.placa
WHERE placa='$placa'";
echo "<html><body><h1>Exclusão de dados</h1>";
echo "<h3>Usuário: $logado</h3>";
echo "<form action='exclui.php' method='post'>";
echo "<fieldset><legend>Dados do Veículo</legend>";
foreach ($con->query($sql) as $row) {
    echo '<label>Placa</label>
                <input type="text" id="txtPlaca" name="txtPlaca"
                       value="' . $row['placa'] . '" readonly="readonly"/>
                <br /><br />
                <label>Fabricante</label>
                <input type="text" id="txtFabricante" name="txtFabricante" 
                            value="' . $row['fabricante'] . '" readonly="readonly"/>
                <br /><br />
                <label>Marca</label>
                <input type="text" id="txtMarca" name="txtMarca" 
                       value="' . $row['marca'] . '" readonly="readonly"/>
                <br /><br />
                <label>Ano</label>
                <input type="number" id="txtAno" name="txtAno" 
                       value="' . $row['ano'] . '" readonly="readonly"/>
                <br /><br />
                <label>Cor</label>
                <input type="text" id="txtCor" name="txtCor" 
                       value="' . $row['cor'] . '" readonly="readonly"/>
            </fieldset>
            <br />
            <fieldset>
                <legend>Dados do Cliente</legend>
                <label>Nome</label>
                <input type="text" id="txtNome" name="txtNome" 
                       value="' . $row['nome'] . '" readonly="readonly"/>
                <br /><br />
                <label>Idade</label>
                <input type="number" id="txtIdade" name="txtIdade" 
                       value="' . $row['idade'] . '" readonly="readonly"/>
                <br /><br />
                <label>Telefone</label>
                <input type="text" id="txtTelefone" name="txtTelefone" 
                       value="' . $row['telefone'] . '" readonly="readonly"/>
            </fieldset><br /><br />';
}
echo "<input type='submit' value='Excluir'>";
echo "<h3><a href='consulta.php'>Consultar dados</a></h3>";
echo "</form></body></html>";
?>