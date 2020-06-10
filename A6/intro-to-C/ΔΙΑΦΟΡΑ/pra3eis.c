/*
 * pra3eis.c
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
	
	int integer1,integer2,sum, piliko, ypoloipo;

	//ΕΚΤΥΠΩΣΗ ΠΡΟΤΡΟΠΗΣ
	
	printf("Dwse timh gia ton prwto akeraio ari8mo\n");
	
	//ΕΙΣΑΓΩΓΗ ΧΡΗΣΤΗ
	
	scanf("%d" ,&integer1); 
	//to & δηλώνει θέση μνήμης. Σημαντικό!
	printf("Dwse timh gia ton deutero akeraio ari8mo\n");
	scanf("%d" ,&integer2);
	
	// ΑΡΧΙΚΟΠΟΙΗΣΗ ΤΩΝ sum,piliko,ypoloipo. 
	//Πρέπει να γίνει σε αυτό το σημείο, όχι στην αρχή.
	
	sum=integer1+integer2;
	piliko=integer1/integer2;
	ypoloipo=integer1%integer2;
	
	//ΕΚΤΥΠΩΣΗ ΑΠΟΤΕΛΕΣΜΑΤΩΝ
	
	printf("To ar8roisma twn %d kai %d einai %d\n",integer1,integer2,sum);
	printf("To piliko twn %d kai %d einai %d\n",integer1,integer2,piliko);
	printf("To Ypoloipo twn %d kai %d einai %d\n",integer1,integer2,ypoloipo);
	return 0;
}
