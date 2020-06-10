#include <iostream>
using namespace std;

int main()
{
	int time=0;
	int am=1;
	while (am<=1000)
	{
		time+=30;
		am*=2;
	}
	cout<<"Sunolikos xronos:"<<time;

	return 0;
}
