/*Exercício 6: Soma com Loop do-while
Desenvolva um programa que utilize um loop do-while para solicitar números inteiros ao usuário. Continue somando esses números até que o usuário insira o número 0. Mostre a soma total ao final.*/




            int soma = 0;
            int numero;

            do
            {
                Console.Write("Digite um número inteiro (0 para sair): ");
                numero = Convert.ToInt32(Console.ReadLine());

                soma += numero;
            } while (numero != 0);

            Console.WriteLine($"A soma total dos números é: {soma}");
        
    

