#include <iostream>
#include <pilha.h>
#include <stdlib.h>

using namespace std;

Pilha pilha; 

int main(){
	IniPilha(&pilha); 
	
	int num; 
	int par, aux;
	int impar = 0;
	
	
	while(1){
		cout <<"Digite um numero: \n";
		cin >> num; 
		if(num == 999){
			break;
		}
		else{
			Push(&pilha, num);
		}
			
	}
		while(!pilhavazia(&pilha)){
			
				
			aux = Pop(&pilha);
			
			if(aux %2 == 0 ){
				par++;
				
			} else if(aux %2 == 1){
				impar++;
				
			}
			
			
		}
		
		cout<<"Numeros pares: "<<par<<endl;
		cout<<"Numeros impares: "<<impar<<endl;
	
}
