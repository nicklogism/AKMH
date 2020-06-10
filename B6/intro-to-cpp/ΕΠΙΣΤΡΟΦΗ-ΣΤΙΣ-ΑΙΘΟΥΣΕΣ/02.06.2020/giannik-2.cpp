#include <iostream>
using namespace std;
#define N 100

int main()
{
	int i, arr[N], th;
	
	for (i=0; i<N; i++)
	{
		// Ο τύπος είναι 2*(Ν-1)+1 αλλά τον μετατρέπουμε κατάλληλα για προσαρμογή στον πίνακα
		arr[i] = 2*((i+1)-1)+1;
	}	
	
	for (i=0; i<N; i++)
	cout <<"\t"<< arr[i];

	cout << endl; 
	cout <<"Eisgete th thesi tou stoixeiou (1-100): "<< endl;
	cin >> th;
	
	cout << arr[th-1];
	
	
	return 0;
}