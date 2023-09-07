
            Console.Write("Digite a primeira letra: ");
            char letra1 = Console.ReadKey().KeyChar;
            Console.WriteLine();

            Console.Write("Digite a segunda letra: ");
            char letra2 = Console.ReadKey().KeyChar;
            Console.WriteLine();

            Console.Write("Digite a terceira letra: ");
            char letra3 = Console.ReadKey().KeyChar;
            Console.WriteLine();

           
            string resultadoConcatenacao = "Ordem reversa (concatenação): " + letra3 + letra2 + letra1;

           
            string resultadoInterpolacao = $"Ordem reversa (interpolação): {letra3}{letra2}{letra1}";

            Console.WriteLine(resultadoConcatenacao);
            Console.WriteLine(resultadoInterpolacao);
        
    

