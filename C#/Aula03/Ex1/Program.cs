


           
     string nome = "Paulo";

     int idade = 17;

     double nota = 7.5;  

     string saidaConcatenacao =  nome + " tem " + idade + " anos e nota " + nota.ToString("F1");

     string saidaInterpolacao = $"Aluno {nome} tem {idade} anos e nota {nota:F1}";

     Console.WriteLine("Usando concatenação:");
     Console.WriteLine(saidaConcatenacao);

     Console.WriteLine("\nUsando interpolação:");
    Console.WriteLine(saidaInterpolacao);
        
    

