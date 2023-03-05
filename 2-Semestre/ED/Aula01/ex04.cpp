#include<iostream>
#include<stdlib.h>

using namespace std; 

int main(){
	
	float n, maior = 0; 
	
	for(int i = 0; i <5; i++)
	{
		cout << "Informe um numero: \n"; 
		cin >> n;
		
		if(n > maior)
		{
			maior = n; 
		}
		if(maior > maior){
			maior = maior; 
		}
		
	}
	
	cout << "O maior numero e: " << maior;
	
	return 0;
}
