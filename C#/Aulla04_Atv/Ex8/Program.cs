    Console.WriteLine("Digite o primeiro número:");
            double numero1 = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine("Digite o segundo número:");
            double numero2 = Convert.ToDouble(Console.ReadLine());

            Console.WriteLine("Digite o terceiro número:");
            double numero3 = Convert.ToDouble(Console.ReadLine());

            double maiorNumero = EncontrarMaiorNumero(numero1, numero2, numero3);

            Console.WriteLine($"O maior número é: {maiorNumero}");
        
        static double EncontrarMaiorNumero(double num1, double num2, double num3)
        {
            double maior = num1;

            if (num2 > maior)
            {
                maior = num2;
            }

            if (num3 > maior)
            {
                maior = num3;
            }

            return maior;
        }
   