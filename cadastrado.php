<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>

    <style>
    *{
        text-align: center;
    }
    </style>

</head>
<body>

    <?php include('insert.php');?>
    <header>O Email <?php echo $_POST['email']?> foi cadastrado com sucesso!</header>
    <footer>
    <h2><a href="index.php">Voltar a página inicial</a></h2>
    </footer>

</body>
</html>