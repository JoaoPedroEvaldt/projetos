<?php

// CONSTANTES



define("NOME", " João");
define("IDADE", "21");
define("ALTURA", "1.87");
define("TIMES", ['Grêmio', 'Real Madrid', 'Vasco']);

echo 'Meu nome é '.NOME.', e minha idade é '.IDADE.' e minha altura é '.ALTURA.'.';
echo "<hr>";
echo TIMES[0];

function exibirNome()
{
    echo NOME;
   
}
exibirNome();