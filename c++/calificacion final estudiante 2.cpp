#include<iostream>

using namespace std;

int main(){
	float notapractica, notateorica, notaparticipacion;
	int notafinal;
	
	cout<<"ingrese la nota de practica: ";
	cin>>notapractica;
	cout<<"ingrese la nota teorica: ";
	cin>>notateorica;
	cout<<"ingrese la nota participacion: ";
	cin>>notaparticipacion;
	
	notapractica= notapractica * 0.30;
	notateorica *= 0.30;
	notaparticipacion *= 0.40;
	
	notafinal =  notaparticipacion + notateorica + notapractica;
	
	cout<<"nota final es "<<notafinal;
	return 0;
	
}
