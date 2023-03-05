//Criar um programa que receba um número que corresponda a um mês do 1º trimestre e escreva o mês
//correspondente; caso o usuário digite o número fora do intervalo deverá aparecer inválido, mas utilizando
//uma função do tipo void.

#include <cstdlib>
#include <iostream>

using namespace std;

void calcTrimestre(int mes){
	
	switch (mes){
		case 1:
			cout<<"\nO mes eh Janeiro";
			break;
		case 2:
			cout<<"\nO mes eh Fevereiro";	
			break;
		case 3:
			cout<<"\nO mes eh Marco";
			break;
		default:
			cout<<"\nO mes eh invalido";	
	}
	
		
}

main(){
	
	int month = 0;
	
	cout<<"\nInforme um mes do primeiro trimestre";
	cin>>month;
	
	calcTrimestre(month);
	
	return 0;
	
}
