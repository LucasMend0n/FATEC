#include <stdlib.h>
#include <iostream>

using namespace std;

int calcDiv(int x, int y)
{

    if (y == 0)
    {
        return -1;
    }
    if (x > y)
    {
        return calcDiv(x - y, y) +1;
    }
    if (x < y)
    {
        return 0;
    }
    if (x == y)
    {
        return 1;
    }
}

int main()
{
    int n1, n2;
    cout << "================\n";
    cout << "QUOCIENTE DA DIVISAO\n";
    cout << "================\n";

    cout << "Digite o numero 1: ";
    cin >> n1;
    cout << "Digite o numero 2: ";
    cin >> n2;

    cout << calcDiv(n1, n2) << endl;

    return 0;
}