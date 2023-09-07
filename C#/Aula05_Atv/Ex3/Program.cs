 /*Exercício 3: Pular Números Ímpares
Desenvolva um programa que utilize um loop for e a palavra-chave continue para imprimir todos os números pares entre 1 e 20. Evite imprimir os números ímpares.*/
        
            for (int i = 1; i <= 20; i++)
            {
                if (i % 2 != 0) // Verifica se o número é ímpar
                {
                    continue; // Pula para a próxima iteração se for ímpar
                }
                Console.WriteLine(i); // Imprime o número par
            }
        
    

