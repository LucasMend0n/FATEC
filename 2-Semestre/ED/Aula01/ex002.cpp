#include <iostream>
#include <stdlib.h>

using namespace std;

int main(){
		
	float C, F = 0;
	

	cout<<"\nInsira a temperatura em graus centigrados";
	cin>>C;
	F = (9 * C + 160) / 5;
	cout<<"\nA temperatura em graus Fahrenheit eh: "<<F;



	return 0;
}


