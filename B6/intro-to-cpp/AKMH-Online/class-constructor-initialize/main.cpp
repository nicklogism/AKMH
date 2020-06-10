#include <iostream>

using namespace std;

class neseser {
	
	
	public:
	string dhmiourgos;
	string megethos;
	int timh; 
	neseser(string maker, string size, int price)
	// Constructor που αρχικοποιεί τιμές
	{
		dhmiourgos=maker;
		megethos=size;
		timh=price;
	}

};

main()
{
	neseser gkotie("GAUTIET","XL",60); // αρχικοποίηση
	cout << "Marka: " << gkotie.dhmiourgos << endl;
	
	return 0;
}