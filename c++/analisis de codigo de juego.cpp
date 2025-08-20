#include <iostream>
#include <ctime>
using namespace std;

int main() {
	
	srand(time(NULL));
	
	string nombre, jugador1, jugador2;
	
	int multiplicacion, ingreso, i = 1, resp, rc1 = 0, ri2 = 0, x=0, j1=0, j2=0;
	
	int n= 9, aleatorio, DESDE=1, HASTA=9;
	
	
	for(int x=1;x<=2;x=x+1)
	{
		
		cout << "Nombre del jugador " << x << " = " << endl;
		
		cin >> nombre;
		
		cout << "Ingresar la tabla de multiplicar : " << endl;
		
		cin >> ingreso;
		
		do
		{
			
			aleatorio = rand()%(HASTA-DESDE+1)+DESDE;
			
			cout << "Cuanto es = " << ingreso << " X " << aleatorio << "\n";
			
			cin >> resp;
			
			multiplicacion = ingreso * aleatorio;
			
			if (resp == multiplicacion)
				
			{
				
				rc1++;
				cout << "Correcto" << "\n";
				
			}
			
			else
			{
				
				ri2++;
				
				cout << "Incorrecto" << "\n";
				cout << "Respuesta correcta =" << multiplicacion << "\n";
				
			}
			
			i++;
			
		}
		
		while (i <= 9);
		
		
		
		
		if (rc1 >= 5)
			
		{
			
			cout << "Felicidades " <<nombre << "\n";
			cout << "Aprobo = " << rc1 << "\n";
			
		}
		
		else
		{
			cout << "Intenta nuevamente " <<nombre << "\n";
			cout << "No Aprobo = " << ri2 << "\n";
			
		}
		
		
		if (x == 1)
			
		{
			jugador1 = nombre;  
			j1 = rc1;
			
		}
		
		else
		{
			jugador2 = nombre;  
			j2 = rc1;
		}
		
		rc1=0;
		ri2=0;
		multiplicacion=0;
		i=1;
		
	}
	
	if (j1 == j2)
		
	{
		cout << "Felicidades jugadores, hay un empate : " <<jugador1 << " y " <<jugador2 << "\n";  
		
	}
	else
	{
		
		
		if (j1 > j2)
			
		{
			cout << "Felicidades, jugador ganador: " <<jugador1 << "\n";  
			
		}
		
		else
		{
			
			cout << "Felicidades, jugador ganador:  " <<jugador2 << "\n";  
			
		}
		
	}
		
	return 0;
}

