/*Exercício 9: Série de Fibonacci até N
Solicite ao usuário que insira um número inteiro N. Utilize um loop de sua escolha para imprimir a série de Fibonacci até o N-ésimo termo. Cada termo da série deve ser exibido no console.*/


 Console.Write("Insira um número inteiro para a série de Fibonacci: ");
            int n = int.Parse(Console.ReadLine());

            int a = 0;
            int b = 1;

            Console.WriteLine("Série de Fibonacci:");
            Console.Write($"{a}, {b}");

            for (int i = 2; i < n; i++)
            {
                int c = a + b;
                Console.Write($", {c}");
                a = b;
                b = c;
            }

            Console.WriteLine();
        
    

