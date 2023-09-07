int num ;
do 
{
    Console.WriteLine("Digite um número maior que 5");
    
    num = Convert.ToInt32(Console.ReadLine());

    Console.WriteLine("Você digitou o número {num}");
    break;
}while (num >5);