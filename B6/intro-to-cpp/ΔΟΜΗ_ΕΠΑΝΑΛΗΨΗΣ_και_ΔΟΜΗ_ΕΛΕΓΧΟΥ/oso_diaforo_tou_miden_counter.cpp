#include <iostream>
#include <iomanip>
using namespace std;

main()
{
	int num,counter=0;
	cout << "Dwse akeraious arithmous:(dwse 0 gia termatismo) " << endl;
	while(num!=0)
	{
		counter++;
		cin>>num;
	}
	cout << "To plhthos twn arithmwn einai: "<<counter-1<<endl;
/* 
Στο counter.cpp νομίζω ότι αντί 
cout<<counter<<endl;  
cout<<counter-1<<endl; θα ήταν καλύτερα, ώστε να μη προσμετράται στο πλήθος και το 0
*/
}
