

        
        
            Console.WriteLine("Digite o nome: ");
            string? nome = Console.ReadLine();

            Console.WriteLine("Digite a senha: ");
            int senha = Convert.ToInt32(Console.ReadLine());

            string mensagem = (nome == "admin" | nome == "maria") && senha == 123
                ? "Login feito com sucesso"
                : "Login inválido";

            Console.WriteLine(mensagem);
        
    

