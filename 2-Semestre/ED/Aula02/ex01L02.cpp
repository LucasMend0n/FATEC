//Dados dois números naturais A e B, calcular o MDC entre A e B através do processo e
//exemplo:
//• Para A=80 e B=112:
//1. Dividir o número maior pelo menor:
//112 dividido por 80 -> quociente 1 e resto 32;
//2. Não dando resto zero, dividir o divisor pelo resto da divisão anterior:
//80 dividido por 32 -> quociente 2 e resto 16;
//3. Prosseguir com as divisões até obter resto zero.
//32 dividido por 16 ->quociente 2 e resto 0.
//Portanto, o MDC(80,112) = 16.

#include<iostream>
#include<stdlib.h>

using namespace std; 

int main(){
	
	int a= 0, b = 0;
	int maior = 0, menor = 0, resto = 0;
	
	
	cout << "\nInforme o maior valor";
	cin>>a;
	cout<<"\nInforme o menor valor";
	cin>>b;
	
	maior = a;
	menor = b;
	
	
	while((maior%menor )!= 0){
		
		resto = maior%menor;
		maior = menor;
		menor = resto;		
		
	}
	
	cout<<"\nO MDC ("<<a<<","<<b<<" ) = "<<menor;
	
	

	return 0;
}
