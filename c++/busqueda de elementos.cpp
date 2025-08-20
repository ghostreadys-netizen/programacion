#include<iostream>
#include<conio.h>
#define MAX 100

using namespace std;
int main()
{int n, elem, i,a[MAX],bandera;

cout<<"Limite:";
cin>>n;
cout<<endl;
for(i=0;i<n;i++)
{cout<<"ELEMENTO =";
cin>>a[i];
}
cout<<endl;
cout<<"Ingrese elemento a buscar:";
cin>>elem;
bandera=1;
for(i=0;i<n;i++){
	if(elem==a[i]){
		bandera=0;
		cout<<"Elemento encontrado"<<endl;}
}
if (bandera== 1)
	cout<<"Elemento no encontrado"<<endl;
getch();
}
