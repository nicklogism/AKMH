#include <iostream>
using namespace std;

int par(int x);

main()
{
    int x,y,z;

    do
    {
        cout << "Dwse dyo thetikous akeraious arithmous: " << endl;
        cin >>y>>z;

    }while(x<0);

    x=par(y)+par(z);
	
    cout <<y<< "!+" << z << "! = "<< x <<endl;
	
	return 0;

}

int par(int x)
{
    int p=1;
	int i;
    
	for(i=1; i<=x; i++)
      {
        p = p * i;
      }

    return p;
}
