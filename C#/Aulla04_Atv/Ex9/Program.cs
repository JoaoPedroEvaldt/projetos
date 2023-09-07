   Console.WriteLine("Digite sua idade:");
            int idade = Convert.ToInt32(Console.ReadLine());

            double tarifa = CalcularTarifa(idade);

            if (tarifa == 0)
            {
                Console.WriteLine("Você não precisa pagar tarifa.");
            }
            else
            {
                Console.WriteLine($"A tarifa a ser paga é: {tarifa:C}");
            }
        
        static double CalcularTarifa(int idade)
        {
            if (idade <= 5 || idade >= 60)
            {
                return 0; // Grátis
            }
            else if (idade >= 6 && idade <= 12)
            {
                return 0.5 * TarifaPadrao(); // 50% de desconto
            }
            else
            {
                return TarifaPadrao(); // Tarifa completa
            }
        }

        static double TarifaPadrao()
        {
            return 2.5; // Exemplo de tarifa padrão, você pode ajustar conforme necessário
        }
    

