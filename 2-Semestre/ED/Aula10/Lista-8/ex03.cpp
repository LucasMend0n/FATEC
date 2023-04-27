#include <stdlib.h>
#include <iostream>

using namespace std;

int exe3(int x, int y)
{
    if (x > y)
        return (-1);
    else
    {
        if (x = y)
            return (1);
        else
            return (x * exe3(x + 1, y));
    }
}

/*

O que é retornado nas seguintes chamadas:
a) cout << exe3(10,4)
b) cout << exe3(4,3)
c) cout << exe3(4,7)
d) cout << exe3(0,0)

*/

int main()
{
 cout << exe3(10,4) <<endl; 
 cout << exe3(4,3)  <<endl;
 cout << exe3(4,7) <<endl;
 cout << exe3(0,0) <<endl;
}
