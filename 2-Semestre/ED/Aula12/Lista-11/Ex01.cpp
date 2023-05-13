#include <iostream>
#include <cstdlib>
#include <cstddef>
#include <new>

using namespace std;

class Node{
    public: 
    int value; 
    Node *next;

}; 

class FilaDinamica{
    private: 
    Node *first;
    Node *last;

    public:
    FilaDinamica();
    ~FilaDinamica();
    void inserir(int numero);
    bool vazia(); 
    bool cheia(); 
    int remover();
    void imprimir();   

}; 

FilaDinamica::FilaDinamica(){
    first = NULL;
    last = NULL;
}

FilaDinamica::~FilaDinamica() 
    {
        Node* temp;
        while (first != NULL){
            temp = first;
            first = first->next;
            delete temp;
        }
        last = NULL;
    }

bool FilaDinamica::cheia(){
    Node *temp; 
    try{
        temp = new Node; 
        delete temp;
        return false; 
    }catch(bad_alloc exception){
        return true; 
    }
}

bool FilaDinamica::vazia(){
    return (first == NULL);
}

void FilaDinamica::inserir(int numero){
        
        Node* newNode = new Node; 
        newNode->value = numero; 
        newNode->next = NULL;
     if(first == 0){
        first = newNode; 
        last = newNode; 
     }else{
        last->next = newNode; 
        last = newNode; 
     }
}

int FilaDinamica::remover(){
    if(vazia()){
        cout << "Fila vazia Impossivel remover elementos\n"; 
        return 0;
    }else{

        Node* temp = first; 
        int numero = first->value; 
        first = first->next;
        if(first == NULL){
            last = NULL; 
        }
        delete temp; 
        return numero;
    }

}

void FilaDinamica::imprimir(){
    Node* temp = first; 
    cout << "Fila ={ "; 
    while (temp != NULL)
    {
         cout << temp->value << " "; 
         temp = temp->next; 
    }
    cout << "}\n";
    
}

int main()
{
    int option;
    FilaDinamica queue;
    int number;
    do
    {
        cout << "MENU PRINCIPAL\n\n\n";
        cout << "(1) - Insere um elemento na fila \n";
        cout << "(2) - Remove um elemento da fila \n";
        cout << "(3) - Imprime a fila \n";
        cout << "(4) - Para SAIR" << endl;
        cin >> option;
        switch (option)
        {
        case 1:

            cout << "Digite o elemento que voce quer inserir: \n";
            cin >> number;
            queue.inserir(number);
            break;
        case 2:
            number = queue.remover();
            cout << "Elemento removido: " << number << endl;
            queue.imprimir();    
            break;
        case 3:
            system("CLS");
            queue.imprimir();
            break;
        default:
            system("CLS");
            cout << "Leia as intrucoes";
            system("PAUSE");
        }
    } while (option != 4);
    return 0;
}
