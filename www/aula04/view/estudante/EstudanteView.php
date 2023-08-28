<?php $listaEstudantes = $_REQUEST["estudantes"]; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<header class="container-fluid bg-black text-white text-center p-4 ">
        <h1 class="mb-2">Semana da Sensibilidade</h1>
      

    </header>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
  
  <img src="https://media.gazetadopovo.com.br/2019/05/31161722/paulo-900x540.jpg" alt="Nesta Imagem temos duas professoaras com um semblante atento e expressões gentis, as professoras estão engajadas em proporcionar uma experiência de aprendizado inclusiva e significativa para o aluno. ">

</div>
<br>
    <a href="/aula04/?controller=Estudante&acao=salvar" class="btn btn-success">Cadastrar Estudante</a>
    <br>
    <br>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach ($listaEstudantes as $estudante) { ?>
           <tr>

                <td><?php echo $estudante["id"]; ?></td>
                <td><?php echo $estudante["nome"]; ?></td>
                <td><?php echo $estudante["idade"]; ?></td>
           </tr>
        <?php } ?>
  </tbody>
</table>
    
</body>

</html>