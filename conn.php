<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "ti33";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Conexão com o banco negada" . $conn->error);
}