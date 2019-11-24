<?php

include('conn.php');

$email = $_POST['email'];

$sql = "INSERT INTO newsletter (email) 
VALUES ('$email')";

if($conn->query($sql) == TRUE){
    echo "<h1>O Email foi cadastrado com sucesso</h1>";
}

else{
    echo "Erro:" . $conn->error;
}

$conn->close();