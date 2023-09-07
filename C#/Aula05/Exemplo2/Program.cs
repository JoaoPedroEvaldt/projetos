int numeros = 0;

while(numeros <=5)
{
    Console.WriteLine(numeros);
    numeros ++;

}
int numeroSecreto = 8;
int palpite;
do 
{
    // Código a ser executado.
 Console.WriteLine("Digite um números");
 palpite = Convert.ToInt32(Console.ReadLine());
}while(palpite!= numeroSecreto);

Console.WriteLine("Parabéns,você advinhou!");
