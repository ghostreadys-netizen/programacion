#include <iostream>
using namespace std;

int main(int argc, char *argv[]) {
	
	int cant = 0;
	int suma = 0;
	
	while ( cant < 100){
		cout<<".Ingrese el numero: "; cin>>cant;
		//cout<<" "<<cant<<" "<<endl;
		suma+=cant;
	}
	cout<<" la suma es:"<<suma<<endl;
	return 0;
}

