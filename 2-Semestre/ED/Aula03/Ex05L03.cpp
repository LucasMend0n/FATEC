//Criar um programa que mostre qual o maior valor entre dois números, utilizando umafunçãodo tipo void (que não retorna valores). 

#include <cstdlib>
#include <iostream>
using namespace std;

void higherValue(float x, float y){
	if( x < y){ 
	cout << "\nO valor " << y << " eh maior"; 
	}
	if(x > y){
	cout << "\nO valor " << x << " eh maior"; 
	}
	else{
		cout << "\n Os valores sao iguais"; 

	}
}


int main (){
	
	float v1, v2 = 0;
	
	cout<< "\n Informe o valor 1: "; 
	cin >> v1; 
	cout<< "\n Informe o valor 2: "; 
	cin >>  v2; 
	
	higherValue(v1,v2);

	return 0; 
}
