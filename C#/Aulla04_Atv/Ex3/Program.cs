Console.WriteLine("Digite seu Estado Civil");
string? estado = Console.ReadLine();

switch(estado)
{
    case "s":
    Console.WriteLine("Sou solteiro(a)");
    break;
    case "c":
    Console.WriteLine("Sou casado(a)");
    break;
    case "d":
    Console.WriteLine("Sou divorciado(a)");
    break;
    case "v":
    Console.WriteLine("Sou viúvo(a)");
    break;
    default:
    Console.WriteLine("Opção Inválida, tente novamente");
    break;
}