
            Console.WriteLine("Digite o primeiro número (x): ");
            int x = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Digite o segundo número (y): ");
            int y = Convert.ToInt32(Console.ReadLine());

            string parImparX = x % 2 == 0 ? "par" : "ímpar";
            string parImparY = y % 2 == 0 ? "par" : "ímpar";

            Console.WriteLine($"O número x é {parImparX}.");
            Console.WriteLine($"O número y é {parImparY}.");
        
    

