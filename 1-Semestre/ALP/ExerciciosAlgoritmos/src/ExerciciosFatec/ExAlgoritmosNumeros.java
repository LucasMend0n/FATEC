package ExerciciosFatec;

import java.util.Scanner;

public class ExAlgoritmosNumeros {
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);

		double num, numMaior = 0, numMenor = 0;

		System.out.println("Digite um número: ");
		num = sc.nextDouble();
		
		numMaior = num;
		numMenor = num;

		while(num > 0) {
			for(int i =0; i < 4; i++) {
				System.out.println("Digite um número: ");
				num = sc.nextDouble();
				if(num > numMaior) {
					numMaior = num;
				}else if(num < numMenor) {
					numMenor = num;
				}				
			}
			
		}
		System.out.println("Maior numero: " + numMaior);
		System.out.println(" Menor numero: " + numMenor);

		sc.close();
	}
}
