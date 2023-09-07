 /*Exercício 4: Sair Quando o Quadrado For Maior que 50
Escreva um programa que utilize um loop while e a palavra-chave break. O programa deve calcular os quadrados dos números inteiros começando com 1 e parar assim que um quadrado maior que 50 for encontrado. Exiba esse valor no console.*/
            int numero = 1;

            while (true)
            {
                int quadrado = numero * numero;

                if (quadrado > 50)
                {
                    Console.WriteLine($"O primeiro quadrado maior que 50 é {quadrado} (número {numero}).");
                    break; // Sai do loop quando encontrar o quadrado maior que 50
                }

                numero++;
            }
        
    

