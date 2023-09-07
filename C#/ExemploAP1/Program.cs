/*Simulado da parte pratica da AP1
 
Instruções Gerais:
Este trabalho deverá ser desenvolvido individualmente.
O código deve ser bem comentado, explicando o que cada parte faz.

Gerador de Relatório de Desempenho

Você será responsável por desenvolver um programa em C# que simule um gerador de relatório de desempenho para um estudante.
Requisitos:

Tipagem de Dados e Conversões
Declare variáveis para armazenar o nome e notas do estudante.
Utilize tipos primitivos adequados.
Operadores Aritméticos
Calcule a média de três notas do estudante.
Formatação de Strings
 
Utilize concatenação e interpolação de strings para gerar o relatório final.
Instruções de Seleção
Se o estudante foi aprovado (média >= 7) ou reprovado (média < 7).
Use um loop para permitir que o usuário insira os dados e gere relatórios múltiplas vezes.
 
Exemplo de Fluxo:

O programa deverá perguntar o nome do estudante.
O programa deverá então perguntar por três notas do estudante.
Calcule a média das notas.

Determine se o estudante foi aprovado ou reprovado, com base na média calculada.
Gere um relatório mostrando o nome do estudante, as três notas, a média e o resultado final (aprovado ou reprovado).
Pergunte ao usuário se ele gostaria de gerar um novo relatório para outro estudante. Se sim, retorne ao passo 1; se não, encerre o programa.*/




    bool continuar = true;


            while (continuar)
            {
                Console.WriteLine("Informe o nome do estudante:");
                string? nome = Console.ReadLine();

                // Declaração das variáveis para armazenar as notas
                
                 Console.WriteLine("Informe a primeira nota:");
                 double nota1 = Convert.ToDouble(Console.ReadLine());

                Console.WriteLine("Informe a segunda nota:");
                double nota2 = Convert.ToDouble(Console.ReadLine());    

                Console.WriteLine("Informe a terceira nota:");
                double nota3 = Convert.ToDouble(Console.ReadLine());

                // Cálculo da média
                double media = (nota1 + nota2 + nota3) / 3;

                // Verificação se o estudante foi aprovado ou reprovado
                string? resultado;
                if (media >= 7)
                {
                    resultado = " Parabéns você está Aprovado";
                }
                else
                {
                    resultado = " Infelizmente você está Reprovado";
                }

                // Geração do relatório
                Console.WriteLine("\n Relatório de Desempenho ");
                Console.WriteLine($"Nome do estudante: {nome}");
                Console.WriteLine($"Notas: {nota1}, {nota2}, {nota3}");
                Console.WriteLine($"Média: {media}");
                Console.WriteLine($"Resultado: {resultado}");

                // Pergunta ao usuário se deseja continuar
                Console.WriteLine("\nDeseja gerar um novo relatório? (S/N)");
                string? resposta = Console.ReadLine();

                if (resposta.ToLower() != "s")
                {
                    continuar = false;
                }

                Console.Clear(); // Limpa a tela para o próximo relatório
            }

            Console.WriteLine("Encerrando programa...");
        
    