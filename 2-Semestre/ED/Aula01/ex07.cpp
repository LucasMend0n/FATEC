#include<iostream>
#include<stdlib.h>

using namespace std; 

int main()
{
	
	int n = 15, aux=3, temp, ult=1, penult=0;
	
	
	cout << penult << endl << ult << endl;

    for(aux=3 ; aux<=n ; aux++){
        cout << (ult+penult) << endl;

        temp = penult;
        penult = ult;
        ult = ult + temp;
    }

	
	return 0;
}
