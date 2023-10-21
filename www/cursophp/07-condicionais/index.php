<?php

$numero = 15;

if ($numero == 10):
    echo "É igual a 10";
elseif($numero <=9):
    echo "É menor ou igual a 9";
else:
    echo "É diferente de 10";

endif;

echo "<br> <br> ";
echo "<hr>";

$cor = "azul";

switch ($cor):
    case"vermelho":
        echo "Sua cor favorita é o vermelho
        ";
        break;
        case"verde":
            echo "Sua cor favorita é o verde
            "; 
            case"azul":
                echo "Sua cor favorita é o azul
                ";  
      default:
      echo "Sua cor favorita não é vermelho, azul ou verde";
      
                
endswitch;
