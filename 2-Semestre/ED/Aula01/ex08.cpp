#include <iostream>
#include <stdlib.h>

using namespace std;

int main(){
		
		int i, num, numMaior, dif, media = 0;
		
		for( i=0; i<14; i++){
			
			cout<<"\nInforme um numero";
			cin>>num;
			
				if(num > numMaior){
					numMaior = num;
					num++;
				}
		}
		media = num/i;
		
		dif = numMaior - media;
		
		cout<<"\nA diferenca entre a media e o maior valor eh: "<<dif;
		
	
}


