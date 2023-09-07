
/*Exercício 5: Tabuada de um Número Usando for
Crie um programa que solicite ao usuário um número inteiro. Utilize um loop for para imprimir a tabuada desse número, de 1 a 10. Mostre cada linha da tabuada no console.*/
 

            Console.Write("Digite um número inteiro: ");
            int numero = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine($"Tabuada do número {numero}:");

            for (int i = 1; i <= 10; i++)
            {
                int resultado = numero * i;
                Console.WriteLine($"{numero} x {i} = {resultado}");
            }
        
    

