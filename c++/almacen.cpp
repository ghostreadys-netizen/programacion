#ifdef __MSDOS__
#include <iostream.h>
#include <stdlib.h>
#else
#include <iostream>
#include <cstdlib>
using namespace std;
#endif

int main (void)
{
	float descuento, precio_final, precio_por_una_camiseta;
	cout << "Ingresa el valor de precio por una camiseta: ";
	cin >> precio_por_una_camiseta;
	cin.get();
	descuento=precio_por_una_camiseta>25000?precio_por_una_camiseta*0.15:precio_por_una_camiseta*0.08;
	precio_final=precio_por_una_camiseta-descuento;
	cout << "Valor de descuento: " << descuento << endl;
	cout << "Valor de precio final: " << precio_final << endl;
	cout << endl;
	system ("pause");
	return EXIT_SUCCESS;
}
