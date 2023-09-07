            Console.WriteLine("Digite o primeiro valor: ");
            double valor1 = Convert.ToDouble(Console.ReadLine());


            Console.WriteLine("Digite o segundo valor: ");
            double valor2 = Convert.ToDouble(Console.ReadLine());

           
            
            double soma = valor1 + valor2;
            double subtracao = valor1 - valor2;
            double multiplicacao = valor1 * valor2;
            double exponenciacao = Math.Pow(valor1, valor2);
            double divisao = valor1 / valor2;
            double modulo = valor1 % valor2;

           
            Console.WriteLine($"Soma: {soma}");
            Console.WriteLine($"Subtração: {subtracao}");
            Console.WriteLine($"Multiplicação: {multiplicacao}");
            Console.WriteLine($"Exponenciação: {exponenciacao}");
            Console.WriteLine($"Divisão: {divisao}");
            Console.WriteLine($"Módulo: {modulo}");
        
    

