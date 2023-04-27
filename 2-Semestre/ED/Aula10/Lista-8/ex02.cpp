#include <stdlib.h>
#include <iostream>

using namespace std;

int exe2(int x, int y)
{
    if (x < y)
        return (-3);
    else
        return (exe2(x - y, y + 3) + y);
}

/* O que é retornado nas seguintes chamadas:
a) cout << exe2(2,7) ?
b) cout << exe2(5,3)?
c) cout << exe2(15,3) ?
*/

int main()
{

    cout << exe2(2, 7) << endl;
    cout << exe2(5, 3) << endl;
    cout << exe2(15, 3) << endl;
}


