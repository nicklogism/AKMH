#include <iostream>
using namespace std;
class Student{

  float proto_eksamino,deytero_eksamino;
  string onomateponimo;
  public:
  // Αρχικοποίηση με constructor
  Student(string namefull, float first, float second){
    onomateponimo = namefull;
    proto_eksamino = first;
    deytero_eksamino = second;
  }
  void deike() {
    cout << "O foithths: " << onomateponimo << endl;
    cout << "Bathmos 1ou eksaminou: " << proto_eksamino << endl;
    cout << "Bathmos 2ou eksaminou: " << deytero_eksamino << endl;
  }
};

int main()
{
    Student foititis1("Markos Botsaris",4,2);
    foititis1.deike();
    // Αν έχουμε public και τις μεταβλητές (proto_eksamino κλπ) τότε παίζει και το παρακάτω.
    //cout << "O foititis" << foititis1.onomateponimo << "έχει exei sto prwto eksamino vathmo: " << foititis1.proto_eksamino; << endl << sto deytero eksamino
    return 0;
}
