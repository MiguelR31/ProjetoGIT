<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "marketplace";

// Criar conexão
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword,$dbName);

// Verificar conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "Cadastrado com sucesso";

?>