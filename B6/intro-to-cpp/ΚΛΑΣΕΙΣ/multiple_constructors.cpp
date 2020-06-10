#include <iostream>
using namespace std;

class dummy
{
	public:
	dummy(); // Default Constructor
	dummy(int in_x); // Second constructor
	~dummy();  // Destructor
	void set_x(int in_x); // Getter
	int get_x() const;  // Setter

	private: // Private Members
	int x;
};

int main()
{
	dummy ob1(10), ob2;

	return 0;
}

dummy::dummy()
{
	x = 0;
}

dummy::dummy(int in_x)
{
	x = in_x;
}

void dummy::set_x(int in_x)
{
	x = in_x;
}

int dummy::get_x() const
{
	return x;
}
dummy::~dummy()
{
	cout << "Destructing with x="<<x<<endl;
}
