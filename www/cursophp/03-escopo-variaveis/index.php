<?php

// ESCOPO GLOBAL

$nome = "João Pedro Evaldt";
$a = 10;
$b = 21;
$c = 33;
function exibirNome()
{
    global $nome;
    echo $nome;
    echo "<hr>";
    echo "<br> <br> ";
}

exibirNome(); 

function exibirData()
{
    global $data;
    $data = "24/04/2002";
}

exibirData();
echo $data;
echo "<hr>";

function soma()
{
   echo $GLOBALS ['a'] +  $GLOBALS ['b'] +  $GLOBALS ['c'] ;
   echo "<br> <br>  ";
   echo "<hr>";
  
}
soma();