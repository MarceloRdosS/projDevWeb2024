
<?php
$servername = "localhost";
$usuario = "root";
$senha = "";
$nomebd = "bdmoana";

// Criar conexão
$conn = mysqli_connect($servername, $usuario, $senha, $nomebd);

// Verificar conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    // echo"Conectado ao BDMOANA";
}
?>
