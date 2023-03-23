#include <iostream>
#include <pilha.h>

using namespace std;

struct Pilha pilha1;

int main(){
	
	 int item;
	 IniPilha(&pilha1); 
	
	cout<<"Menu de opcoes:\n";
	
		int option;
		int tamanho = 0;
		
		do{
			
		cout<<"1.Inserir um numero na pilha\n";
		cout<<"2.Remover um elemento na pilha\n";
		cout<<"3.Mostrar o elemento do topo da pilha\n";
		cout<<"4.Mostrar os elementos da pilha\n";
		cout<<"5.Sair\n";
		cin>>option;
			
			switch(option){
			case 1:
				cout<<"Digite o elemento a ser inserido: \n";
				cin>>item;
				Push(&pilha1, item);
				tamanho++;
				system("cls");
				break;
			case 2:
				Pop(&pilha1);	
				system("cls");
				break;
			case 3:
				cout<<"Top: "<<endl;
				cout<<Top(&pilha1)<<endl;
				break;
			case 4:
				cout<<"Pilha {" ;
				while(!pilhavazia(&pilha1)){
				cout<<" "<<Pop(&pilha1);
				}
				cout<< " } \n";
				break;
				
				}
				
		}while(option != 5);
		
	return 0;
}
