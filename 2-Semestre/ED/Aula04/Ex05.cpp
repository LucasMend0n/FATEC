/*

*/

#include <iostream>
#include <pilha.h>

using namespace std; 	

int main(){	

	Pilha pilha; 
	IniPilha(&pilha);
	
	int n, t;
	char element;
	char palavra[25];
  
	
	cout << "Digite uma palavra: \n"; 
	cin >> palavra; 
	
	n = strlen(palavra);
	for( int i = 0; i < n; i++){
		Push(&pilha,palavra[i]); 
	}
	while(!pilhavazia(&pilha)){
		element = Pop(&pilha);
		cout << element;
	}
	
	
	
	
	return 0; 
}
