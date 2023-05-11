#include <iostream>
#include <cstddef>

using namespace std;

int main (){
    int *p = new int; 
    if(p == NULL){
        cout << "Erro de alocacao\n"; 
        exit(1);
    }

    *p = 100; 
    cout <<  "na posicao: " << p << "O valor eh: " << *p << "\n";
    delete p;

    return 0; 
}
