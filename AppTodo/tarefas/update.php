<?php
require ('config.php');

//Validações


//Gravar na Base de dados
$query = "  UPDATE tarefas 
            SET id = :id, nome = :nome, descricao = :descricao, prazodia = :prazodia , prazohora = :prazohora 
            WHERE id = :id
        ";
$stmt = $db->prepare($query);
$stmt->bindParam(':nrprocesso', $_POST['nrprocesso']);
$stmt->bindParam(':nome', $_POST['nome']);
$stmt->bindParam(':email', $_POST['email']);
$stmt->bindParam(':telefone', $_POST['telefone']);
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo $appName; ?></title>
</head>

<body>
    <div class="container">
        <h1><?php echo $appName; ?></h1>

        <a href="index.php" class="btn btn-sm btn-success mb-2">Voltar à lista</a>

        <div class="alert alert-success">
            Inscrição alterada com sucesso
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>