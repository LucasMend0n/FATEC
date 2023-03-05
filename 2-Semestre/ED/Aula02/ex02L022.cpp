//Dado um número real X e um número natural K, calcular a potência X elevado a K
//através de produtos sucessivos.
//xk = x.x.x.x. ...... x

#include<iostream>
#include<stdlib.h>

using namespace std; 

int main(){
	
	float x, k = 0;
	float result = 0;
	
	cout<<"\nInforme uma base";
	cin>>x;
	cout<<"\nInforme um expoente";
	cin>>k;


	if(k == 0){
		result = 1;
		
	} else {
		for(int i = 0; i < k; i++){
		if(result == 0){
			result = x;
		} else{
			
		 result *= x;	
		}
		
	}	
		
		
	}


	
	cout<<"\nO resultado eh: "<<result;
	

	return 0;
}
