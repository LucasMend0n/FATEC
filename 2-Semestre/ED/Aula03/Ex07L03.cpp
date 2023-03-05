//Criar  um  programa  que  retorne  o  fatorial  de  um  número,  usando  uma funçãoque  receba  um  valor  e retorne o fatorial desse valor.Fatorial de 5 = 5 x 4 x 3 x 2 x 1 = 120
#include <cstdlib>
#include <iostream>
using namespace std;

int factor(int x){
		
	int prod = 1; 
	
	for (int i = 1; i <= x; i ++){
		prod *= i; 
	}
	return prod;  
	
}


int main (){
	float v, result =0;
	
	cout<< "\n Informe o valor 1: "; 
	cin >> v; 
	
	result = factor(v);	
	
	cout << endl << "Fatorial do numero: "<< result << endl; 

	


	return 0;	

}
