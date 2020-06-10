#include <iostream>

using namespace std;

class car {
	float tziros; // Ιδιωτικά δεδομένα της κλάσης
	
	public: // access specifier (προσδιοριστής πρόσβασης)
	string marka; // Δημόσια δεδομένα της κλάσης
	string montelo; 
	int etos_kataskeyhs;
	void kalispera() // Μέθοδος της κλάσης
	{
		cout << "kalispera" << endl;
	}
	car() // Constructor (κατασκευαστής)
	{
		cout << "Kalhspera apo ton constructor" << endl;
	}
	car(float lefta) // μέθοδος η οποία μας δίνει πρόσβαση στο ιδιωτικό μέλος
	{
		tziros=lefta;
	}

};

main()
{
	car karouli; // αντικείμενο της κλάσης car
	car ntalika(22000); // εδώ καλείται ο δεύτερος constructor (float lefta)
	karouli.kalispera();
	cout << "Dwse marka" << endl;
	cin >> karouli.marka;
	cout << "H marka pou edwses einai: " << karouli.marka << endl;
	return 0;
}