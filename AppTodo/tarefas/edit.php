<?php 
    require ('config.php');
    $query = "SELECT * FROM tarefas WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $tarefa = $stmt->fetch();
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

        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $tarefa['id'] ?>">
            <div class="mb-3">
                <label for="nrprocesso" class="form-label">Nr.Processo</label>
                <input type="number" class="form-control" id="nrprocesso" name="nrprocesso" value="<?php echo $aluno['nrprocesso'] ?>">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $aluno['nome'] ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $aluno['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone Contacto</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $aluno['telefone'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>