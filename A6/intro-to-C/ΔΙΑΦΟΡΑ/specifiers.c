/*
 * specifiers.c
 * 
 * Copyleft 2019 nicklogism
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

#include <stdio.h>
int main()
{
	// ΔΗΛΩΣΗ ΜΕΤΑΒΛΗΤΩΝ
	
	int a;
	float b;
	char c;
	a=93;
	b=3.14;
	c='J';
	
	//ΕΚΤΥΠΩΣΗ ΜΕΤΑΒΛΗΤΩΝ
	
	printf("H timh thw metavlitis a sto dekadiko einai:\t%d\n",a); 
	// Το %d ή %i = integer (δηλώνει ακέραιο). \n αφήνει κενή γραμμή. \t αφήνει ένα tab.
	printf("H timh ths metavlitis b se pragmatiko ari8mo einai:\t%0.2f\n",b); 
	// %f = float (δηλώνει πραγματικό). Το 0.2 ορίζει πόσα δεκαδικά θα εκτυπωθούν. Από default εκτυπώνει 5.
	printf("H timh ths metavlitis c ws xaraktiras einai:\t%c\n\n\n",c); 
	// %c = Char (δηλώνει χαρακτήρα)
	
	// ΜΕΤΑΤΡΟΠΗ ΣΕ ΟΚΤΑΔΙΚΟ & ΔΕΚΑΕΞΑΔΙΚΟ
	
	printf("H timh thw metavlitis a sto oktadiko einai:\t%o\n",a); 
	//Το %o δηλώνει οκταδικό
	printf("H timh thw metavlitis a sto dekae3adiko einai:\t%X\n",a); 
	// Το %X δηλώνει κεφαλαίο Δεκαεξαδικό
	
	// ΕΚΤΥΠΩΣΗ ΧΑΡΑΚΤΗΡΑ ΣΕ ΚΩΔΙΚΑ ASCII
	
	printf("H timh ths metavlitis c ston kodika ASCII einai: %d\n",c); 
	//Τη δηλώνουμε ως int(d). Θα τυπώσει τον ακέραιο αριθμό που αντιστοιχεί στη μεταβλητή c=J στον κώδικα ASCII
	
	// ΕΚΤΥΠΩΣΗ ΑΚΕΡΑΙΟΥ ΒΑΣΕΙ ΚΩΔΙΚΑ ASCII
	
	printf("H timh ths metavlitis a vasei tou kodika ASCII einai: %c\n",a); 
	//Τη δηλώνουμε ως char(c).
	return 0;
}
