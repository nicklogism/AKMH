/*Η δομή ως παράμετρος συνάρτησης*/

#include<iostream>

using namespace std;

struct Book{
	string title;
	string author;
	string book_id;
};

void readBook(Book &bk);
void printBook(Book bk);

int main()
{
	Book book1;
	readBook(book1);
	printBook(book1);
} 

void readBook(Book &bk) {
	cout << "Dwse onoma vivliou: ";
	getline(cin, bk.title); // Το getline() διαβάζει ολόκληρη τη γραμμή
	cout << "Dwse onoma suggrafea: ";
	getline(cin, bk.author); // π.χ Edgar Allan Poe
	cout << "Dwse kwdiko vivliou : ";
	getline(cin, bk.book_id);
}
	
void printBook(Book bk) {
	cout << endl;
	cout << "Book title : " << bk.title <<endl;
	cout << "Book author : " << bk.author <<endl;
	cout << "Book id : " << bk.book_id <<endl;
}