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
	int cantidad_de_lapices, costo, pago;
	cout << "Ingresa el valor de cantidad de lapices: ";
	cin >> cantidad_de_lapices;
	cin.get();
	costo=cantidad_de_lapices>1000?85:90;
	pago=costo*cantidad_de_lapices;
	cout << "Valor de costo: " << costo << endl;
	cout << "Valor de pago: " << pago << endl;
	cout << endl;
	system ("pause");
	return EXIT_SUCCESS;
}
