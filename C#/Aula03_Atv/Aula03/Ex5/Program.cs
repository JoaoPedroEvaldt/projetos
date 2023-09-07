

            double a = 1;
            double b = 12;
            double c = -13;

            double delta = Math.Pow(b, 2) - 4 * a * c;

            if (delta < 0)
            {
                Console.WriteLine();
            }
            else
            {
                double x1 = (-b + Math.Sqrt(delta)) / (2 * a);
                double x2 = (-b - Math.Sqrt(delta)) / (2 * a);

                Console.WriteLine($"Raiz 1 (x1): {x1}");
                Console.WriteLine($"Raiz 2 (x2): {x2}");
            }
        
    

