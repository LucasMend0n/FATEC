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

bool FilaDinamica::cheia(){
    Node *temp; 
    try{
        temp = new Node; 
        delete temp;
        return false; 
    }catch(bad_alloc ex){
        return true; 
    }
}

bool FilaDinamica::vazia(){
    return first == NULL;
}

void FilaDinamica::inserir(int numero){
    if(cheia()){
        cout << "Fila cheia! Impossivel inserir novos elementos\n"; 
    }else{
        Node *newNode = new Node; 
        newNode->value = numero; 
        newNode->next = NULL;
        if(first == NULL){
            first = newNode; 
        }else{
            last->next = newNode; 
        }
    }
}

int FilaDinamica::remover(){
    if(vazia()){
        cout << "Fila vazia! Impossivel remover elementos\n"; 
        Node *temp = first; 
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