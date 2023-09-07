    Console.WriteLine("Digite o primeiro número:");
            double numero1 = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine("Digite o segundo número:");
            double numero2 = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine("Escolha a operação: + (soma), - (subtração), * (multiplicação), / (divisão)");
            char operacao = Convert.ToChar(Console.ReadLine());

            double resultado = RealizarOperacao(numero1, numero2, operacao);

            Console.WriteLine($"Resultado: {resultado}");
        

        static double RealizarOperacao(double num1, double num2, char operacao)
        {
            switch (operacao)
            {
                case '+':
                    return num1 + num2;
                case '-':
                    return num1 - num2;
                case '*':
                    return num1 * num2;
                case '/':
                    if (num2 != 0) 
                    {
                        return num1 / num2;
                    }
                    else
                    {
                        Console.WriteLine("Divisão por zero não é permitida.");
                        Environment.Exit(0);
                        return 0; 
                    }
                default:
                    Console.WriteLine("Operação inválida.");
                    Environment.Exit(0);
                    return 0; 
            }
        }
   