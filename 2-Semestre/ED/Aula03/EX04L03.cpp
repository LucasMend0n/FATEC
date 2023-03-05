//Criar um programa que receba um grau e o converta para radianos através de uma função.
//Fórmula: radiano = grau * pi / 180

#include <cstdlib>
#include <iostream>

using namespace std;


float calcRadian (float g){
	
	const float PI = 3.1415;
	
	float radiano = 0;
	
	return radiano = g * PI / 180;
}


int main(){
	
	float grau = 0;
	
	
	cout<<"\nInforme o grau";
	cin>>grau;
	
	float radiano = calcRadian(grau);
	
	cout<<"\nO valor em radianos eh: "<<radiano;
	
	return 0;
	
}

