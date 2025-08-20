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
	promedio = suma / 30;
	for ( i=0;i<30;i++){
		cout<<num[i]<<endl;
	}
	
	cout<<"La suma elemento es: "<<suma<<endl;
	cout<<" El promedio es: "<<promedio<<endl;
	
	getch();
	return 0;
}

