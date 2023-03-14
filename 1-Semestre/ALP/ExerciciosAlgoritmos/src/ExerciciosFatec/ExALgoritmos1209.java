package ExerciciosFatec;

import java.util.Scanner;

public class ExALgoritmos1209
{
	public static void main(String[] args) 
	{
		Scanner sc = new Scanner(System.in); 
		int sex = 0; 
		int idd = 0; 
		int maiorIdd = 0;
		int bigger = 0;
		
		for (int i=0; i<10; i++ ) 
		{
			
			while(sex < 1 || sex >2 ) 
			{
				System.out.println("Digite 1 para homens e 2 para mulheres: ");
				sex = sc.nextInt(); 
			}
			
			while (idd <18 || idd >80) 
			{
				System.out.println("Digite a idade do colaborador: ");
				idd = sc.nextInt();
			}
			if (idd > maiorIdd ) 
			{
				maiorIdd = idd; 
				bigger = sex; 
			}
			sex = 0;
			idd =0; 
		}
		System.out.println("Maior idade dos func: " + maiorIdd + " o sexo deste func é: " + bigger);
		sc.close();
	}
	
	
	
	
}