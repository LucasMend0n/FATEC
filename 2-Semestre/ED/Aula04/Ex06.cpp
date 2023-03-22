//Uma string é considerada palíndroma se ela pode ser lida da esquerda para a direita ou
//da direita para a esquerda com o mesmo significado. Neste caso, não podemos considerar
//acentuações, letras maiúsculas ou minúsculas, os espaços e os caracteres especiais. A
//seguir estão alguns exemplos:
//Radar
//Subi no Onibus
//Go dog
//Faça um programa em C++ para verificar se uma expressão é ou não palíndroma

#include <iostream>
#include <pilha.h>

using namespace std;

int main(){
	
	struct Pilha P1;
	IniPilha(&P1);
	char caractere[30];
	char x;
	int t, i;
	char y;
	bool palindromo;
	
	
	cout<<"\nEscreva uma palavra: ";
	cin>>caractere;
	
	t = strlen(caractere);
	
	for(i=0; i<t; i++){
		Push(&P1, caractere[i]);
	}
	while (!pilhavazia(&P1)){
		for(i=0; i<t; i++){
			x=Pop(&P1);
			if(caractere[i] == x){
				palindromo = true;
			}else{
				palindromo = false;
			}
		}
		
		if(palindromo){
			cout<<"\nEh um palindromo";
		} else {
			cout<<"\nNao eh um palindromo";
		}
		
	}
	return 0;	
}
