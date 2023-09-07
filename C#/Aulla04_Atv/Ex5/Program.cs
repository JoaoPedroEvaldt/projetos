
      
        {
            Console.WriteLine("Digite um ano:");
            int ano = Convert.ToInt32(Console.ReadLine());

            if (VerificarAnoBissexto(ano))
            {
                Console.WriteLine($"{ano} é um ano bissexto.");
            }
            else
            {
                Console.WriteLine($"{ano} não é um ano bissexto.");
            }
        }

        static bool VerificarAnoBissexto(int ano)
        {
         
            if ((ano % 4 == 0 && ano % 100 != 0) || ano % 400 == 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    

