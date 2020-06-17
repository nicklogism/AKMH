/*Κληρονομικότητα - Ένθετο struct*/

#include<iostream>

using namespace std;

struct employee {
	int id;
	double salary;
};

struct company {
	employee manager; // ένθετη δομή
	int years;
};

int main()
{
	company nike;
	nike.manager.id = 778899;
	nike.manager.salary = 80000;
	nike.years = 12;
} 