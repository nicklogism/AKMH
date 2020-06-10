#include <iostream>
#include <string>

using namespace std;

int main()
{
	int i,max=0;
	string s,smax;
	
	for(i=0;i<5;i++)
	{
		cin>>s;
		if(s.size()>max)
		{
			max=s.size();
			smax=s;
		}
	}
 cout<<smax<<" "<<max<<endl;
	
	return 0;
}