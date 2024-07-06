<?php

$servername = "locahost";
$username = "root"
$password = "";
$database = "fintech_bd";

//criaão da conexão 
$con = mysqli_connect($servername, $username, $password, $database);

//check connection
if (!$con) {
	die("falha de conexão: "  mysqli_connect_error())
}

//echo"conectado com sucesso";

//mysqli_close($conn)


?>