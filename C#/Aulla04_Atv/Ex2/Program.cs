Console.WriteLine("Digite um número de 1 ao 7");

int dia = Convert.ToInt32(Console.ReadLine());

switch (dia)
{
    case 1:
    Console.WriteLine("Domingo");
    break;
    case 2:
    Console.WriteLine("Segunda");
    break;
    case 3:
    Console.WriteLine("Terça");
    break;
     case 4:
    Console.WriteLine("Quarta");
    break;
     case 5:
    Console.WriteLine("Quinta");
    break;
     case 6:
    Console.WriteLine("Sexta");
    break;
     case 7:
    Console.WriteLine("Sabado");
    break;
    default:
    Console.WriteLine("Número Inválido");
    break;
}