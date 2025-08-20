#include <iostream>
using namespace std;

int main(int argc, char *argv[]) {
	int i;
	string producto[100];
	float precio[30];
	int cant[10];
	float des=0;
	float subtotal = 0;
	float total=0;
	
	//llenar los elementos del arreglo
	for(int i=0; i < 5; i++){
		cout<<i+1<<" Ingrese los nombres del producto: ";
		cin>>producto[i];

		cout<<"ingresar la cantidad: ";
		cin>>cant[i];
	
		cout<<" Ingrese el precio: ";
		cin>>precio[i];
	
	subtotal+= cant[i] * precio[i];
	}
	des = subtotal * 0.07;
    total =  subtotal + des ;
	
	cout<<endl;
	cout<<"Nombres"<<"  \tprecio"<<"  \tcantidad"<<"   \tItbm"<<"  \ttotal"<<endl;
	//imprimimos 
	for(int i=0; i < 3; i++){
		cout<<""<<producto[i]<<"->   $"<<precio[i]<<"-> "<<cant[i]<<"-> " <<des<<" \t->  $"<<total<<endl;
	}
	
	return 0;
}
