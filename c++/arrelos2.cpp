#include <iostream>
#include <conio.h>
using namespace std;

int main(){
	int num [30];
	int suma = 0,pares = 2;
	double promedio;
	int i;
	
	for ( i=0; i<30; i++){
		num[i]=pares;
		suma += num[i];
		pares+=2;
	}
	
	for ( i=0;i<30;i++){
		cout<<num[i]<<endl;
		
	}
	cout<<"La suma elemento del areglo es: "<<suma<<endl;
	
	getch();
	return 0;
}

