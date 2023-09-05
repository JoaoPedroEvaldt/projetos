<?php $professor = $_REQUEST["professor"]; ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/'. FOLDER. '/view/navbar.php'; ?> 


    <div class="container">
        <form method="POST" action="/<?php echo FOLDER; ?>/?controller=Professor&acao=editar&id=<?php echo $professor ["id"]; ?>">  
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome"value="<?php echo $professor ["nome"];?>">
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $professor ["idade"];?>">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</body>