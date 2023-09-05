<?php $listaProfessores = $_REQUEST["professores"]; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/'. FOLDER. '/view/navbar.php'; ?> 


  <header class="container-fluid bg-black text-white text-center p-4 ">
    <h1 class="mb-2">Semana da Acessibilidade</h1>


  </header>
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh href: 90vh;">

    <img src="data:image/png;base64,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"
      alt="Nesta Imagem temos duas professoaras com um semblante atento e expressões gentis, as professoras estão engajadas em proporcionar uma experiência de aprendizado inclusiva e significativa para o aluno. ">

  </div>
  <br>
  <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=salvar" class="btn btn-success">Cadastrar Professor</a>
  <br>
  <br>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Ações</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($listaProfessores as $professor) { ?>
        <tr>

          <td>
            <?php echo $professor["id"]; ?></td>
          <td> <?php echo $professor["nome"]; ?> </td>
          <td> <?php echo $professor["idade"]; ?> </td>
            <td> <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=editar&id=<?php echo $professor['id'];?>"class="btn btn-primary">Editar</a> </td>
            <td> <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=excluir&id=<?php echo $professor['id'];?>"class="btn btn-primary">Excluir</a> </td>

        
        </tr>
      <?php } ?>
    </tbody>
  </table>

</body>

</html>