<?php

// ARRAYS

$carros = array(1=>"BMW", 2=>"MERCEDES", 3=>"TOYOTA");
$carros[] = "Amarok";
$carros[10] = "Mustang";

echo  $carros[10];
echo "<br>";


$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";

$clientes = ["Pedro","Renata","Alceu"];
print_r($clientes);
echo "<hr>";

//COUNT

$totalMotos = count($motos) ;
echo  $totalMotos;
echo "<hr>";

// FOREACH

foreach($clientes as $valor)
{
    
    echo $valor."<br>";
}
echo "<hr>";

// ARRAYS ASSOCIATIVOS

$pessoa = array("nome"=> "Joao Pedro ", "idade" => 21, "altura"=> 1.74);
$pessoa["cidade"] = "Três Cachoeiras";

foreach($pessoa as $indice => $valor)
{
    echo $indice.":".$valor."<br>";
}

echo "<hr>";

// ARRAYS MULTIDIMENSIONAIS

$times = array("cariocas"=> array("campeao"=>"Vasco", "vice"=>"Flamengo", "terceiro"=>"Fluminense"),
"paulistas"=> array("campeao"=>"Santos", "vice"=>"Palmeiras", "terceiro"=>"São Paulo"),
"gauchos"=> array("campeao"=>"Grêmio", "vice"=> "Caxias", "terceiro"=> "Pelotas")
); 

echo "<br>";

foreach($times["cariocas"] as $indice => $valor)
{
    echo $indice.":".$valor."<br>";
}

echo "<hr>";

foreach($times["paulistas"] as $indice => $valor)
{
    echo $indice.":".$valor."<br>";
}

echo "<hr>";

foreach($times["gauchos"] as $indice => $valor)
{
    echo $indice.":".$valor."<br>";
}
