#include <iostream>
using namespace std;

class point {

    public:
        point(); // default constructor αρχικοποίηση
        point(double in_x, double in_y); // constructor εισαγωγής τιμών
        void set_x(double in_x); // setter του x
        void set_y(double in_y); // setter του y
        double get_x() const; // getter του x. Ένας getter δεν παίρνει ορίσματα.
        double get_y() const; // getter του y. Ένας getter είναι πάντα const.
        void print(); // Δημόσια συνάρτηση για εκτύπωση αντικειμένων (πχ ob1, ob2, ob3)
    private:
        double x;
        double y;

};



int main()
{
    point ob1(1.1,2.2);
    point ob2(1.0,2.0);
    point ob3;

    cout<< "Το 1ο σημείο:";
    ob1.print();
    cout<<endl<< "Το 2ο σημείο:";
    ob2.print();
    cout<<endl<< "Το 3ο σημείο:";
    ob3.print();
    return 0;
}

point::point()
{
    x = 0.0;
    y = 0.0;
}

point::point(double in_x, double in_y)
{
    x = in_x;
    y = in_y;
}

void point::set_x(double in_x)
{
    x = in_x;
}

void point::set_y(double in_y)
{
    y = in_y;
}

double point::get_x() const
{
    return x;
}

double point::get_y() const
{
    return y;
}

void point::print()
{
    cout <<"("<<x<<","<<y<<")"<<endl;
}
