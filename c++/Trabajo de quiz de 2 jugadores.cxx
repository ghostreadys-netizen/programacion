#include <iostream>
#include <stdlib.h>

using namespace std;

int main()
{
	string inte;
	string inte1;
	string name;
	string name1;
	float puntos;
	float puntos1;
	string res;
	string res1;
	puntos = 0;
	name = "";
	name1 = "";
	res = "";
	res1 = "";
	inte = "si";
	inte1 = "si";
	cout << "!Bienvenido¡" << endl;
	cout << "Primer jugador";
	cout << "\nEste es el Desafio del saber, ¿cual es tu nombre?" << endl;
	cin >> name;
	cout << "¿Aqui ponemos a prueba tus conocimientos de informatica" << endl;
	cout << endl; //  borrar la pantalla con C++ estandar
	cout << name << "  Estas preparado? Iniciemos con la primera pregunta, responde A, B, C, D" << endl;
	cout << "-----------------------------------------------------" << endl;
	while ((inte == "si") || (inte == "SI") || (inte == "sI") || (inte == "Si"))
	{
		inte = "a";
		cout << "¿Cual de estos es el lenguaje de alto nivel?" << endl;
		cout << "A. C++ " << endl;
		cout << "B. vim " << endl;
		cout << "C. Cobol " << endl;
		cout << "D. P.H.P. " << endl;
		cin >> res;
		system("cls"); //  borrar la pantalla con C++ estandar
		if ((res != "d") && (res != "D"))
		{
		}
		else
		{
			puntos = puntos + 1;
			cout << "-----------------------------------------------------" << endl;
			cout << "Correcto, tu puntuacion es: " << puntos << endl;
			cout << "-----------------------------------------------------" << endl;
			cout << "¿Cuales son los componentes internos de la computadora?" << endl;
			cout << "A. Mouse " << endl;
			cout << "B. Procesador " << endl;
			cout << "C. Teclado " << endl;
			cout << "D. Bateria " << endl;
			cin >> res;
			system("cls"); //  borrar la pantalla con C++ estandar
			if ((res != "b") && (res != "B"))
			{
				system("cls"); //  borrar la pantalla con C++ estandar
			}
			else
			{
				puntos = puntos + 1;
				cout << "-----------------------------------------------------" << endl;
				cout << "Correcto, tu puntuacion es: " << puntos << endl;
				cout << "-----------------------------------------------------" << endl;
				cout << "¿Como o que es el sistema binario?" << endl;
				cout << "A. Cifra " << endl;
				cout << "B. Entero " << endl;
				cout << "C. Binario" << endl;
				cout << "D. De dos digitos " << endl;
				cin >> res;
				system("cls"); // borrar la pantalla con C++ estandar
				if ((res != "d") && (res != "D"))
				{
				}
				else
				{
					puntos = puntos + 1;
					cout << "-----------------------------------------------------" << endl;
					cout << "Correcto, tu puntuacion es: " << puntos << endl;
					cout << "-----------------------------------------------------" << endl;
					cout << "¿Cual es el nombre del dueño de microsoft?" << endl;
					cout << "A. Ricardo blue" << endl;
					cout << "B. Leonardo Gonzalez" << endl;
					cout << "C. Ricardo Martinelli" << endl;
					cout << "D. Bill Gates" << endl;
					cin >> res;
					system("cls"); //  borrar la pantalla con C++ estandar
					if ((res != "d") && (res != "D"))
					{
						cout << "-----------------------------------------------------" << endl;
					}
					else
					{
						puntos = puntos + 1;
						cout << "-----------------------------------------------------" << endl;
						cout << "Correcto, tu puntuacion es: " << puntos << endl;
						cout << "-----------------------------------------------------" << endl;
						cout << "¿Transformacion del modelo Entidad-Relacion ?" << endl;
						cout << "A. Cardinalidad" << endl;
						cout << "B. Atributos" << endl;
						cout << "C. Cadena" << endl;
						cout << "D. Codigo" << endl;
						cin >> res;
						system("cls"); // borrar la pantalla con C++ estandar
						if ((res != "a") && (res != "A"))
						{
							cout << "Incorrecto, tu puntuacion es: " << puntos << endl;
							cout << "Lastima " << name << ", has perdido ¿quieres volver a intentarlo?" << endl;
							system("cls");
						}
						else
						{
							puntos = puntos + 1;
							cout << "-----------------------------------------------------" << endl;
							cout << "Correcto, tu puntuacion es: " << puntos << endl;
							cout << "-----------------------------------------------------" << endl;
							cout << "¿Cuales son los componentes externos de la computadora?" << endl;
							cout << "A. Fuente de poder " << endl;
							cout << "B. Memoria" << endl;
							cout << "C. Pantalla" << endl;
							cout << "D. Socket" << endl;
							cin >> res;
							system("cls"); // borrar la pantalla con C++ estandar
							if ((res != "c") && (res != "C"))
							{
							}
							else
							{
							}
						}
					}
				}
			}

			cout << "/////////////////////////////////////" << endl;
			cout << " Oh valla te has equivocado..." << endl;
			cout<<"siguente jugador...";
			system("pause"); // detiene el codigo y presiona una tecla
			system("cls");	 // borrar la pantalla con C++ estandar
			cout << endl;
			cout << "!Bienvenido! " << endl;
			cout << "Segundo Jugador";
			cout << "\nEste es el Desafio del saber, ¿cual es tu nombre? Segundo Jugador" << endl;
			cin >> name1;
			cout << " Aqui Ponemos a prueba tus conocimientos de la historia" << endl;
			cout << endl; // borrar la pantalla con C++ estandar
			cout << name1 << " Estas preparado? Iniciemos con la primera pregunta, responde A, B, C, D" << endl;
			cout << "-----------------------------------------------------" << endl;
			while ((inte1 == "si") || (inte1 == "SI") || (inte1 == "sI") || (inte1 == "Si"))
			{
				inte1 = "a";
				cout << "¿Cual es el pais mas grande del mundo?" << endl;
				cout << "A. Estados Unidos" << endl;
				cout << "B. China" << endl;
				cout << "C. Rusia" << endl;
				cout << "D. Canada" << endl;
				cin >> res1;
				system("cls"); //  borrar la pantalla con C++ estandar
				if ((res1 != "c") && (res1 != "C"))
				{
					cout << "Incorrecto, tu puntuacion es: " << puntos1 << endl;
					puntos1 = 0;
					cout << "Lastima " << name1 << ", has perdido ¿quieres volver a intentarlo?" << endl;
					cout << endl; //  borrar la pantalla con C++ estandar
				}
				else
				{
					puntos1 = puntos1 + 1;
					cout << "-----------------------------------------------------" << endl;
					cout << "Correcto, tu puntuacion es: " << puntos1 << endl;
					cout << "-----------------------------------------------------" << endl;
					cout << "¿Que fue el holocausto nazi?" << endl;
					cout << "A. Un terremoto" << endl;
					cout << "B. Una masacre" << endl;
					cout << "C. Un tornado" << endl;
					cout << "D. Un arma" << endl;
					cin >> res1;
					system("cls"); //  borrar la pantalla con C++ estandar
					if ((res1 != "b") && (res1 != "B"))
					{
						cout << endl; // borrar la pantalla con C++ estandar
					}
					else
					{
						puntos1 = puntos1 + 1;
						cout << "-----------------------------------------------------" << endl;
						cout << "Correcto, tu puntuacion es: " << puntos1 << endl;
						cout << "-----------------------------------------------------" << endl;
						cout << "¿Quien fue Francisco Franco?" << endl;
						cout << "A. Poeta chileno" << endl;
						cout << "B. Dictador español" << endl;
						cout << "C. Escritor Venezolano" << endl;
						cout << "D. Independentista ecuatoriano" << endl;
						cin >> res1;
						system("cls"); // borrar la pantalla con C++ estandar
						if ((res1 != "b") && (res1 != "B"))
						{
							cout << endl; // borrar la pantalla con C++ estandar
						}
						else
						{
							puntos1 = puntos1 + 1;
							cout << "-----------------------------------------------------" << endl;
							cout << "Correcto, tu puntuacion es: " << puntos1 << endl;
							cout << "-----------------------------------------------------" << endl;
							cout << "¿Quien es el mayor asesino en la historia?" << endl;
							cout << "A. Adolf Hitler" << endl;
							cout << "B. Mao Zedong" << endl;
							cout << "C. Iasif Stalin" << endl;
							cout << "D. Ninguno de los anteriores" << endl;
							cin >> res1;
							system("cls"); // borrar la pantalla con C++ estandar
							if ((res1 != "b") && (res1 != "B"))
							{
								cout << endl; // borrar la pantalla con C++ estandar
							}
							else
							{
								puntos1 = puntos1 + 1;
								cout << "-----------------------------------------------------" << endl;
								cout << "Correcto, tu puntuacion es: " << puntos1 << endl;
								cout << "-----------------------------------------------------" << endl;
								cout << "¿Cual es el libro mas vendido de la historia?" << endl;
								cout << "A. El principito" << endl;
								cout << "B. 100 años de soledad" << endl;
								cout << "C. Harry Potter" << endl;
								cout << "D. La biblia" << endl;
								cin >> res1;
								system("cls"); // borrar la pantalla con C++ estandar
								if ((res1 != "d") && (res1 != "D"))
								{
								}
								else
								{
									cout << "-----------------------------------------------------" << endl;
									cout << "Correcto, tu puntuacion es: " << puntos1 << endl;
									cout << "-----------------------------------------------------" << endl;
									cout << "¿fecha del ultimo tsunami que afecto las costa panameña" << endl;
									cout << "A. 14 de agosto  2002" << endl;
									cout << "B. 1 de septiembre  1825" << endl;
									cout << "C. 25 de diciembre 1725" << endl;
									cout << "D. 22 de abril 1992" << endl;
									cin >> res1;
									if ((res != "d") && (res != "D"))
									{
									}
									else
									{
									}
								}
							}
						}
					}
				}
			}
		}
	}

	if (puntos > puntos1)
	{
		cout << "-----------------------------------------------------" << endl;
		cout << "\tFELICIDADES. HAS GANADO!" << endl;
		cout << "\t////////////" << name << "///////////" << endl;
		cout << "\tLa puntuacion  es:  " << puntos << " - " << name << endl;
		cout << "\tLa puntuacion  es:  " << puntos1 << " - " << name1 << endl;
		cout << endl;
		cout << "-----------------------------------------------------" << endl;
	}
	else if (puntos < puntos1)
	{
		cout << "-----------------------------------------------------" << endl;
		cout << " FELICIDADES. HAS GANADO!" << endl;
		cout << "////////////" << name1 << "///////////" << endl;
		cout << "\tLa puntuacion  es:  " << puntos <<  " - " << name << endl;
		cout << "\tLa puntuacion  es:  " << puntos1 << " - " << name1 << endl;
		cout << endl;
		cout << "-----------------------------------------------------" << endl;
	}
	cout << endl;
	if (puntos == puntos1)
	{
		cout << "-----------------------------------------------------" << endl;
		cout << "\tLa puntuacion  es: " << puntos << endl;
		cout << endl;
		cout << "\tLa puntuacion  es: " << puntos1 << endl;
		cout << "/////////////////////////////////////////////////" << endl;
		cout << "\n------" << name << "--- Empate ---" << name1 << "------" << endl;
	}
	else
	{
		//cout <<"\tLa puntuacion de "<<name<<" es:"<<puntos<< endl;
		puntos1 = puntos1 + 1;
		//cout <<"\tLa Puntuacion de "<<name1<<" es:"<<puntos1<< endl;
		cout << "Hasta pronto. Esperamos que se hayan divertido" << endl;
	}
	return 0;
}
