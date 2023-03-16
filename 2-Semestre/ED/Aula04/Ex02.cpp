#include <iostream>
#include <pilha.h>
#include <stdlib.h>

using namespace std;

Pilha pilha; 

int main(){
	IniPilha(&pilha); 
	
	int num =0; 
	
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
	cout << "A ordem da pilha eh: \n" ;
	while(!pilhavazia(&pilha)){
		cout<< Pop(&pilha) << endl;
	}
	
	
	
	return 0; 
}
