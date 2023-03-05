#include <iostream>
#include <stdlib.h>
#include <cmath>
using namespace std;

int main(){
		
		float volume, R, altura = 0;
		 float PI = 3.14159;
		 
		cout<<"\nInforme a altura";
		cin>>altura;
		cout<<"\nInforme o raio";
		cin>>R;
		
		volume = PI * pow(R,2) * altura;
		
		cout<<"\nO volume de uma lata de oleo e: "<<volume;
		



	return 0;
}


