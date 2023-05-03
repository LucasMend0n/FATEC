/*

Elaborar um programa recursivo que dado um número natural K, calcular a potência X elevado a K através de produtos sucessivos.

*/

#include <stdlib.h>
#include <iostream>
#include <math.h>

using namespace std;

int calcPow(int x, int k)
{
    if (k == 1)
    {
        return x;
    }
    if (k == 0)
    {
        return 1;
    }
    return x * calcPow(x, k - 1);
}

int main()
{
    int n1, n2;
    cout << "================\n";
    cout << "POTENCIA POR K\n";
    cout << "================\n";

    cout << "Digite a base: ";
    cin >> n1;
    cout << "Digite o numero que sera exponenciado: ";
    cin >> n2;

    cout << calcPow(n1, n2) << endl;

    return 0;
}