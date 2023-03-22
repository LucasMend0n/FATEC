#include <iostream>
#include <pilha.h>
#include <stdlib.h>
#include <stdio.h>
#include <string.h>

using namespace std;

Pilha pilha; 	

int main(){	
	
	IniPilha(&pilha);
	int num, resto, quociente;
	cout << "\nDigite um numero decimal: ";
	cin>> num;
	
	while(num != 0){
		resto = num % 16; 
		quociente = num / 16; 
		Push(&pilha,resto);
		num = quociente;
	}
	
	
	cout << "O valor em hex eh: \n";
	while(!pilhavazia(&pilha)){
		int element = Pop(&pilha); 
		if(element >= 0 && element <=9 ){
			cout << element;
		}else if (element == 10) {
            cout << "a";
        } else if (element == 11) {
            cout << "b";
        } else if (element == 12) {
            cout << "c";
        } else if (element == 13) {
            cout << "d";
        } else if (element == 14) {
            cout << "e";
        } else if (element == 15) {
            cout << "f";
        }
		
	}
	cout << endl;
	system("pause");	
	return 0; 
}
