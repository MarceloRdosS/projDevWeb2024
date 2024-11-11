
<?php
$servername = "localhost";
$usuario = "root";
$senha = "";
$nomebd = "bdmoana";
$conn = mysqli_connect($servername, $usuario, $senha, $nomebd);
if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}
else {
    // echo"Conectado ao BDMOANA";
}
?>
