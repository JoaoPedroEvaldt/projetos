
<?php
// TIPO DE DADOS ESCALARES


//STRING

$nome = "Iniciando...";
var_dump($nome);
if (is_string($nome)) {
    echo "É uma string";
} else {
    echo "Não é uma string.";
}
echo"<br> <br>";
echo "<hr>";

// INT

$idade = 10;
var_dump($idade);
if (is_int($idade)) {
    echo "É um inteiro!";
} else {
    echo "Não é um inteiro!";
}
echo"<br> <br>";
echo "<hr>";

// FLOAT

$altura = 1.77;
var_dump($altura);
if (is_float($altura)) {
    echo "É um float!";
} else {
    echo "Não é um float!";
}
echo"<br> <br>";
echo "<hr>";

//BOOLEAN

$admin = true;
var_dump($admin);
if (is_bool($admin)) {
    echo "É um Booleano!";
} else {
    echo "Não é um Booleano!";
}
echo"<br> <br>";
echo "<hr>";

// TIPO DE DADOS COMPOSTOS

// ARRAY

$carros = array("Jetta","Civic","Fusion","Sonata");
var_dump($carros);
if (is_array($carros)) {
    echo "É um Array!";
} else {
    echo "Não é um Array!";
}
echo"<br> <br>";
echo "<hr>";



//OBEJECT

class Cliente
{
    public $nome;
    
    public function atribuirNome($nome)
    {
        $this->nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("João Pedro");
var_dump($cliente);
if (is_object($cliente)) {
    echo "É um Objeto!";
} else {
    echo "Não é um Objeto!";
}
echo"<br> <br>";
echo "<hr>";

