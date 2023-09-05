    Console.WriteLine("Calculadora de Média e Conceito");

            Console.Write("Quantos números deseja calcular a média? ");
            int quantidadeNumeros = int.Parse(Console.ReadLine());

            double soma = 0;

            for (int i = 1; i <= quantidadeNumeros; i++)
            {
                Console.Write($"Insira a nota {i}: ");
                double nota = double.Parse(Console.ReadLine());
                soma += nota;
            }

            double media = soma / quantidadeNumeros;

            Console.WriteLine($"A média é: {media}");

            if (media == 10)
            {
                Console.WriteLine("Parabéns! Nota máxima!");
            }
            else if (media >= 6)
            {
                Console.WriteLine("Aluno aprovado!");
            }
            else
            {
                Console.WriteLine("Aluno reprovado.");
            }

            Console.ReadLine();
        
    

