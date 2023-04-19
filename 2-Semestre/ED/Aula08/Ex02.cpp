#include <iostream>
#include <stdlib.h>
#include "Fila.h"
#include "pilha.h"

using namespace std;
int main()
{
    system("CLS");
    int elem, op, x, i, y, removed;

    struct queue q;
    inicFila(&q);

    struct queue copyQueue;
    inicFila(&copyQueue);

    struct Pilha stack;
    struct Pilha copyStack;
    IniPilha(&stack);
    IniPilha(&copyStack);

    int cont = 0; 
    /*Loop principal: para sair escolher opção 4*/
    while (op != 8)
    {
        op = 0;
        /*Desenhando o menu principal*/
        system("CLS");

        cout << "Fila Circular" << endl;
        cout << "(1) - Insere um elemento na Fila" << endl;
        cout << "(2) - Remove um elemento da Fila" << endl;
        cout << "(3) - Imprime a Fila" << endl;
        cout << "(4) - Para inverter o conteudo da Fila" << endl;
        cout << "(5) - Saber o numero de elementos existentes na fila circular" << endl;
        cout << "(6) - Saber o primeiro elemento da fila" << endl;
        cout << "(7) - Saber o ultimo elemento da fila" << endl;
        cout << "(8) - Para SAIR" << endl;
        cout << "Digite sua opcao" << endl;
        cin >> op;

        /*recebendo a opção ate que seja fornecida uma valida*/
        while (op < 1 || op > 8)
        {
            cin >> op;
        }
        /*Escolha*/
        switch (op)
        {
        case 1:
            if (filaCheia(&q) == 1)
            {
                cout << "A fila esta cheia!!";
            }
            else
            {
                system("CLS");

                cout << "Entre com um valor : ";
                cin >> elem;
                insFila(&q, elem);
                cont ++;

            }
            break;
        case 2:
            if (filaVazia(&q) == 1)
            {
                cout << "A fila esta vazia!!";
                system("PAUSE");
            }
            else
            {
                x = remFila(&q);
                cout << "Valor removido: " << x << endl;
                system("PAUSE");
                cont --; 
            }
            break;
        case 3:
            if (filaVazia(&q) == 1)
            {
                cout << "A fila esta vazia!!";
                system("PAUSE");
            }
            else
            {
                y = guardainicio(&q);
                cout << "FILA :{ ";
                while (!filaVazia(&q))
                {
                    x = remFila(&q);

                    cout << x << " ";
                }
                cout << "} " << endl; 
            }
            retornainicio(&q, y);
            system("PAUSE");
            break;
        case 4:

            if (filaVazia(&q) == 1)
            {
                cout << "A fila esta vazia!!";
                system("PAUSE");
            }
            else
            {
                copyQueue = q; 
                while (!filaVazia(&copyQueue))
                {
                    Push(&stack, remFila(&copyQueue));
                }

                cout << "FILA INVERTDA: { ";
                while (!pilhavazia(&stack))
                {
                    cout << Pop(&stack) << " ";
                }
                cout << "}" << endl;
                system("PAUSE");
                break;
            }
        case 5:
            cout << "O numero de elementos na fila eh: " << cont << endl; 
            system("PAUSE");
            break; 

        case 6:
            copyQueue = q;
            removed = remFila(&copyQueue);
            cout << "PRIMEIRO ELEMENTO DA FILA: " << removed << endl;
            system("PAUSE");
            break;
        
        case 7:
            
            copyQueue = q;
            copyStack = stack;
            while (!filaVazia(&copyQueue))
            {
                Push(&copyStack, remFila(&copyQueue)); 
            }
            cout << "Ultimo elemento da fila: " << Top(&copyStack) << endl; 
            system("Pause"); 
            break;         
        
        }
    }
}
