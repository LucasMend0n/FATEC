/*
 Defina um programa recursivo para, dado um número n, imprimi-lo em base binária
*/

#include <stdlib.h>
#include <iostream>

using namespace std;

void toBinary(int number)
{
if(number <1){
    cout << number; 
}else{
    
 
}

}

int main()
{
    int n = 0;
    cout << "================" << endl;
    cout << "CONVERSAO DECIMAL PARA BINARIO" << endl;
    cout << "================" << endl;

    cout << "Digite o termo que voce quer converter em binario: ";
    cin >> n;

    toBinary(n);

    return 0;
}