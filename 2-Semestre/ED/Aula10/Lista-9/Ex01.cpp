/*

*/

#include <stdlib.h>
#include <iostream>

using namespace std;

int fibonacci (int i){
    if(i==1) return 1; 
    if(i==2) return 1; 

    return fibonacci(i-1) + fibonacci(i -2); 
}

int main(){
    int x =0; 
    cout << "================" << endl;
    cout << "FIBONACCI"<< endl ;
    cout << "================" << endl; 

    cout << "Digite o termo que voce quer encontrar na sequencia fibonnaci: ";
    cin >> x;

    cout << fibonacci(x) << endl;

     
}