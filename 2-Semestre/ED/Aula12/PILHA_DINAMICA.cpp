#include <iostream>
#include <cstdlib>

using namespace std;

class Pilha
{
  int info;
  Pilha *next;

public:
  Pilha();
  void Push(int n);
  int Pop();
  void Imprime();
};
Pilha *TOPO;

Pilha::Pilha()
{
  info = 0;
  next = NULL;
}

void Pilha::Push(int n)
{
  this->info = n;
  this->next = TOPO;
  TOPO = this;
}

int Pilha::Pop()
{
  int temp;
  if (TOPO == NULL)
  {
    cout << "Pilha Vazia" << endl;
    return (0);
  }
  temp = this->info;
  TOPO = this->next;
  delete (this);
  return (temp);
}

void Pilha::Imprime()
{
  if (TOPO == NULL)
    cout << "Pilha Vazia" << endl;
  else
  {
    Pilha *temp;
    temp = TOPO;
    while (temp != NULL)
    {
      cout << temp->info << endl;
      temp = temp->next;
    }
  }
}

int main()
{

  Pilha *pp;
  int valor;
  int escolha;

  TOPO = NULL;

  do
  {
    system("CLS");
    cout << "MENU PRINCIPAL \n\n\n";
    cout << "(1) - Insere um elemento na Pilha";
    cout << "(2) - Remove um elemento da Pilha";
    cout << "(3) - Imprime a Pilha";
    cout << "(4) - Para SAIR\n";
    cin >> escolha;
    switch (escolha)
    {
    case 1:
      system("CLS");
      pp = new Pilha();
      cout << "\nEntre com um numero : ";
      cin >> valor;
      pp->Push(valor);
      break;
    case 2:
      system("CLS");
      valor = TOPO->Pop();
      cout << "valor removido: " << valor << endl;
      system("PAUSE");
      break;
    case 3:
      system("CLS");
      TOPO->Imprime();
      system("PAUSE");
      break;
    case 4:
      exit(1);
      break;
    default:
      system("CLS");
      cout << "Leia as intrucoes";
      system("PAUSE");
    }
  } while (escolha != 4);
  return 0;
}
