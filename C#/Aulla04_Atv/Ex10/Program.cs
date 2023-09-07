
     Console.WriteLine("Digite a temperatura:");
     double temperatura = Convert.ToDouble(Console.ReadLine());

    if (temperatura < 0)
    {
        Console.WriteLine("Congelando!");
    }

    else if (temperatura >= 0 && temperatura <= 15)
    {
        Console.WriteLine("Frio!");
    }
     else if (temperatura >= 16 && temperatura <= 25)
    {
        Console.WriteLine("Clima agradável!");
    }
     else if (temperatura >= 26 && temperatura <= 35)
    {
        Console.WriteLine("Calor!");
    }
     else if (temperatura >= 35)
    {
        Console.WriteLine("MUITO QUENTE!");
    }