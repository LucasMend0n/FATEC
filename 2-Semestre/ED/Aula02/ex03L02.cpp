//Efetuar o cálculo da quantidade de litros de combustível gastos em uma viagem,
//utilizando-se um automóvel que faz “x” km/l. Para obter o cálculo, o usuário deverá
//fornecer o tempo gasto na viagem e a velocidade média durante a mesma. Desta forma será
//possível obter a distância percorrida com a fórmula: DISTÂNCIA= TEMPO *
//VELOCIDADE (utilizar uma função). Tendo o valor da distância, basta calcular a
//quantidade de litros de combustível utilizada na viagem com a fórmula:
//LITROS_USADOS=DISTÂNCIA / “x” (através de função). O programa deverá apresentar
//os valores da velocidade média, tempo gasto na viagem, a distância percorrida e a
//quantidade de litros utilizada na viagem.


#include<iostream>
#include<stdlib.h>

using namespace std; 

int main(){
	
	double x = 20, qtdLitros = 0;
	double tempo = 0, velMedia = 0, distancia = 0; 


	cout<<"\nInforme o tempo gasto na viagem em hora";
	cin>>tempo;
	cout<<"\nInforme a velocidade media durante a viagem";
	cin>>velMedia;
	

	distancia = tempo * velMedia;
	
	
	qtdLitros = distancia/x;	
	

	cout<<" \nA velocidade media eh: "<<velMedia<<" tempo: "<<tempo<<" distancia percorrida: "<<distancia<<" quantidade de litros: "<<qtdLitros;

	return 0;
}
