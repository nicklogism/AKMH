/*Lesson 15.05.2020 N.Kont. - Online*/

/*Σημειώσεις:
Μοντελοποίηση ενός αυτοκινήτου.
Παράδειγμα ελέγχου όταν ο χρήστης δώσει κενό.
*/

#include <iostream>
#include <string>
using namespace std;

class aytokinhto {
  int kyvika;
  string sasman;
  string xrwma;
  string kaysimo;
  int etosKataskevis;
  string katastasiPwlhshs;
public:
  string marka;
  string montelo;
};

int main(int argc, char** argv)
{
  aytokinhto car1;
  cout << "Δωσε μάρκα και μοντέλο";
  getline(cin,car1.marka); // Για να ελέγξουμε και για το κενό
  if(car1.marka == "")
  {
    cout << "Έδωσες κενό"<< endl;
    cout << "Καταχωρήθηκε αυτόματα Audi"<< endl;
    car1.marka = "Audi"; // Default τιμή στη μεταβλητή.
  }
  cin >> car1.montelo;
  cout << "Marka: " << car1.marka << endl << "Montelo: " <<  car1.montelo << endl ;

return 0;
}
