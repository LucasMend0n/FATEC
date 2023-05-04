#include <stdlib.h>
#include <iostream>

using namespace std;

int soma(int x)
{
    if (x == 0){
      return 0;  
    }  
    
    return x + soma(x-1); 
}

int main()
{
    int n1;
    cout << "================\n";
    cout << "SOMATORIO\n";
    cout << "================\n";

    cout << "Digite o numero 1: ";
    cin >> n1;

    cout << soma(n1) << endl;

    return 0;
}