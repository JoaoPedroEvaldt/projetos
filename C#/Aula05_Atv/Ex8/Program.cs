/*Exercício 8: Fatorial de um Número
Peça ao usuário para inserir um número inteiro positivo. Utilize um loop for para calcular o fatorial desse número. Exiba o resultado no console.*/
 


 
        
        
            Console.Write("Insira um número inteiro positivo: ");
            int numero = int.Parse(Console.ReadLine());

            int fatorial = 1;
            for (int i = 1; i <= numero; i++)
            {
                fatorial *= i;
            }
            
            Console.WriteLine($"O fatorial de {numero} é: {fatorial}");
        
    
