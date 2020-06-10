#include <iostream>
using namespace std;
class ergazomenos{
  float misthos;
public:
  //Θέτουμε τιμή στη private μεταβλητή - setter
  void setMisthos(int poso){
    misthos=poso;
  }
  //Παίρνουμε τιμή από μια private μεταβλητή - getter
  int getMisthos(){
    return misthos;
  }
};

int main()
{
    ergazomenos dimitriou; // αντικείμενο (ή στιγμιότυπο) της κλάσης
    dimitriou.setMisthos(2500);
    cout << "Ο μισθός του Δημητρίου είναι: " << dimitriou.getMisthos();
    return 0;
}
