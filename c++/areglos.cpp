#include <iostream>
#include <stdio.h>
using namespace std;

int main (){
    float num [10];
	int promedio;
	int mayor = 0,menor =0,suma =0;
	int i;
	
	for ( i=0; i<10; i++){
		cout<<" Dame tu numero "<<i+1<<" :";
		cin>>num[i];
		suma+=num[i];
	    }
	promedio = suma / 10;
	   
	for ( i=0; i<10; i++){
		if ( num[i] > promedio){
			mayor++;
		}
		
		if ( num[i] < promedio){
			menor++;
		}
		
	}
	cout<<"\nEl promedio total es: " <<promedio<<endl;
	cout<<"\nEl promedio mayor es: " <<mayor<<endl;
	cout<<"\nEl promedio menor es: " <<menor<<endl;
	system("pause");
	return 0;
	}
