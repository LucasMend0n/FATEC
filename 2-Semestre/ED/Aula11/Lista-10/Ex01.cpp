#include <stdlib.h>
#include <iostream>

using namespace std;

int calcMod(int x, int y)
{

    if (y == 0)
    {
        return -1;
    }
    if (x > y)
    {
        return calcMod(x - y, y);
    }
    if (x < y)
    {
        return x;
    }
    if (x == y)
    {
        return 0;
    }
}

int main()
{
    int n1, n2;
    cout << "================\n";
    cout << "MODULO DA DIVISAO\n";
    cout << "================\n";

    cout << "Digite o numero 1: ";
    cin >> n1;
    cout << "Digite o numero 2: ";
    cin >> n2;

    cout << calcMod(n1, n2) << endl;

    return 0;
}