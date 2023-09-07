/*Exercício 7: Encontrar o Primeiro Múltiplo de 3 e 7
Utilize um loop for e a palavra-chave break para procurar o primeiro número que seja múltiplo tanto de 3 quanto de 7, dentro do intervalo de 1 a 100. Exiba esse número no console.*/
 
    int limiteInferior = 1;
            int limiteSuperior = 100;
            int primeiroMultiplo = -1; // Inicializamos com um valor inválido

            for (int numero = limiteInferior; numero <= limiteSuperior; numero++)
            {
                if (numero % 3 == 0 && numero % 7 == 0)
                {
                    primeiroMultiplo = numero;
                    break; // Encontramos o primeiro múltiplo, então saímos do loop
                }
            }

            if (primeiroMultiplo != -1)
            {
                Console.WriteLine($"O primeiro múltiplo de 3 e 7 é: {primeiroMultiplo}");
            }
            else
            {
                Console.WriteLine("Não foi encontrado nenhum múltiplo de 3 e 7 no intervalo de 1 a 100.");
            }
        
    
