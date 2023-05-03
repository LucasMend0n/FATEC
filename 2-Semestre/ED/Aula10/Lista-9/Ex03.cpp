/*

Elabore um programa recursivo que calcule o MDC de dois inteiros usando o algorítmo de  Euclides,  que  pode  ser  descrito  da  seguinte  forma:    dividimos  o  número  maior  pelo número  menor  e  pegamos  o  resto.    Na  continuação  do  processo,  pegamos  o  divisor  e  o dividimos  pelo resto  até  que  este  seja  zero.    O  quociente  da  última  divisão  será  o  próprio MDC.  Por exemplo, suponha que sejam os números 928 e 100.  Dividindo-os, obteremos um resto de 28.  em seguida, dividimos 100 por 28 e obtemos um resto 16, depois 28 por 16 e obtemos um resto 12, depois 16 por 12 e obtemos um resto 4 e, finalmente, 12 por 4 e um resto  0.    Então,  o  MDC  é  4,  que  é  o  quociente  da  última  divisão.    A  seguir,  encontramos uma   definição   matemática   do   algoritmo   de   Euclides,   que   pode   ser   útil   para   o desenvolvimento do programa recursivo:

*/

#include <stdlib.h>
#include <iostream>

using namespace std;

int calcMDC(int n1, int n2)
{
    if(n1 < n2){
        return calcMDC(n1, n2);
    }
    if(n2 == 0){
        return n1; 
    }
    return calcMDC(n2, n1 % n2); 

}

int main()
{
    int n1, n2;
    cout << "================" << endl;
    cout << "MDC" << endl;
    cout << "================" << endl;

    cout << "Digite o primeiro numero: ";
    cin >> n1;
    cout << "Digite o segundo numero: ";
    cin >> n2;

   cout <<  calcMDC(n1, n2); 

    

    return 0;

}