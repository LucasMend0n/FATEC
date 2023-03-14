package ExerciciosUdemy;
import java.util.Scanner;
public class exercicio01Soma {

	public static void main(String[] args) {
		int a; 
		int b; 
		int soma; 
		
		Scanner sc = new Scanner(System.in); 
		
		System.out.println("Valor A: ");
		a = sc.nextInt(); 
		System.out.println("Valor B: ");
		b = sc.nextInt();
		
		soma = a+b; 
		System.out.println("A soma dos valores é: " + soma);
		sc.close();
	}

}
