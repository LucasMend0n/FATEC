package ExerciciosFatec;
import java.util.Scanner;

public class exercicio01Meses {

    public static void main(String[] args) {
       int mes;
       int dias;
        Scanner read = new Scanner(System.in);

        System.out.println("Quantos dias tem o mês?");
        System.out.println("Digite o número correspondente ao mês: ");
        mes = read.nextInt();

        if (mes == 2){
            dias = 28;
            System.out.println("Esse mes tem: "+dias+" dias");
        } else if (mes==4 || mes==6 || mes==9 ||mes==11 ) {
            dias= 30;
            System.out.println("Esse mes tem: "+dias+" dias");
        }else{
            dias=31;
            System.out.println("Esse mes tem: "+dias+" dias");
        }


    }
}
