
            Console.WriteLine("Digite sua idade:");
            int idade = Convert.ToInt32(Console.ReadLine());

            string categoria = CategorizarFaixaEtaria(idade);

            Console.WriteLine($"Você se enquadra na categoria: {categoria}");
        

        static string CategorizarFaixaEtaria(int idade)
        {
            if (idade >= 0 && idade <= 12)
            {
                return "Criança";
            }
            else if (idade >= 13 && idade <= 18)
            {
                return "Adolescente";
            }
            else if (idade >= 19 && idade <= 59)
            {
                return "Adulto";
            }
            else
            {
                return "Idoso";
            }
        
    }

