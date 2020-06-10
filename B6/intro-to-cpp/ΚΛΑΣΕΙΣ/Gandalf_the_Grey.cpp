#include <iostream>
#include <cstring>
using namespace std;

class wizard {
    public:
        wizard(int in_age, char *in_beard, int in_mana); // constructor σε string πάντα με *
        int get_age() const;
        int get_mana() const;
        int print_age();
        int print_mana();
        char print_beard();
        void fireball();
        void lightning();
        void wait();
    private:
        int age;
        char beard[80];
        int mana;
    
};

int main()
{
    char str[80]="Grey";
    wizard gandalf(2019,str,100);
   
    cout <<"Presenting you Gandalf the ";
    gandalf.print_beard();
    cout <<endl<<"Gandalf is "; 
    gandalf.print_age();
    cout << " Years Old"<<endl;
    cout << "He has "; 
    gandalf.print_mana();
    cout << " mana available"<<endl;
    
    
    gandalf.fireball();
    gandalf.wait();
    gandalf.lightning();
    gandalf.wait();
    gandalf.wait();
    gandalf.fireball();
    
    return 0;
}

wizard::wizard(int in_age, char *in_beard, int in_mana)
{
    age = in_age;
    strcpy(beard, in_beard); // Λόγω string μόνο με strcpy !
    mana = in_mana;
}

int wizard::get_age() const
{
    return age;
}
    
int wizard::get_mana() const
{
    return mana;
}

int wizard::print_age()
{
    cout << age;
}

int wizard::print_mana()
{
    cout << mana;
}
char wizard::print_beard()
{
    cout << beard;
}

void wizard::fireball()
{
    if (mana>=30)
    {
        mana-=30;
        cout<<endl<<"Fireball !! (mana:"<<mana<<")";
    }
    else
        cout <<endl<<"Fireball effort: Not enough mana";
    
}

void wizard::lightning()
{
    if (mana>=90)
    {
        mana-=90;
        cout<<endl<<"Lightning !! (mana:"<<mana<<")";
    }
    else 
        cout <<endl<<"Lightning effort: Not enough mana";
    
}

void wizard::wait()
{
    if (mana<=90)
    {
        mana+=10;
        cout<<endl<<"Waiting... (mana:"<<mana<<")";
    }
    
   
}
