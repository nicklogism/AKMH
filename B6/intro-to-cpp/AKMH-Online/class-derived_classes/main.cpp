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

// Κληρονομικότητα 1 
class tsantaki_mpaniou : public neseser {
	
	public:
	tsantaki_mpaniou()
	{
		cout << "Kalhspera apo to tsantaki_mpaniou class";
	}
	string typos = "mpaniou";
	
};

// Κληρονομικότητα 2 (πολλαπλή κληρονομικότητα - κληρονομεί όλες τις παραπάνω κλάσεις)
class tsantaki_mpaniou_thalassas : public tsantaki_mpaniou {
	
	public: 
	
	
}

main()
{
	
	return 0;
}