//Dado um n�mero real X e um n�mero natural K, calcular a pot�ncia X elevado a K
//atrav�s de produtos sucessivos.
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


	for(int i = 0; i < k; i++){
		if(result == 0){
			result = x;
		} else{
			
		 result = result * x;	
		}
		
	}
	
	cout<<"\nO resultado eh: "<<result;
	

	return 0;
}
