
<?php
if (isset($_POST['btn-entrar'])):
    echo "Clicou";
endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Login: <input type="text" name="login"> 
    <br> <br>
    Senha: <input type="password" name="senha"> 
    <br>  <br>
    <button type="submit" name="btn-entrar">  Entrar </button>
    

    </form>
</body>
</html>


