using System;

namespace CalculadoraCompleta
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Calculadora Completa");
            Console.WriteLine("Operações disponíveis:");
            Console.WriteLine("1 - Adição");
            Console.WriteLine("2 - Subtração");
            Console.WriteLine("3 - Multiplicação");
            Console.WriteLine("4 - Divisão");

            Console.Write("Escolha uma operação (1/2/3/4): ");
            int escolha = int.Parse(Console.ReadLine());

            Console.Write("Digite o primeiro número: ");
            double num1 = double.Parse(Console.ReadLine());

            Console.Write("Digite o segundo número: ");
            double num2 = double.Parse(Console.ReadLine());

            double resultado = 0;

            switch (escolha)
            {
                case 1:
                    resultado = num1 + num2;
                    break;
                case 2:
                    resultado = num1 - num2;
                    break;
                case 3:
                    resultado = num1 * num2;
                    break;
                case 4:
                    if (num2 != 0)
                    {
                        resultado = num1 / num2;
                    }
                    else
                    {
                        Console.WriteLine("Divisão por zero não é permitida.");
                        return;
                    }
                    break;
                default:
                    Console.WriteLine("Operação inválida.");
                    return;
            }

            Console.WriteLine($"Resultado: {resultado}");

            Console.ReadLine();
        }
    }
}
