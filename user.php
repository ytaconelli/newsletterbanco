<?php
include('conn.php');
$sql = "SELECT * FROM newsletter";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas</title>
    <style>
    *{
        font-family: arial;
    }
    table,th,td{
        border: 1px solid black;
        border-collapse: collapse;
    }

    td, th{
        padding: 5px;
    }

    th{
        background-color:black;
        color:orange;
    }
    </style>


</head>
<body>

<h1>Usuários Cadastrados</h1>

<table>

<tr>
    <th>Email</th>
</tr>

<?php include('criarlinha.php');?>

</table>


<?php
   $num = $resultado->num_rows;
?>

<p>Número de emails cadastrados: <?php echo $num?>

<h3><a href="index.php">Voltar para página inicial</a></h3>

<?php
$conn->close();
?>

</body>
</html>
