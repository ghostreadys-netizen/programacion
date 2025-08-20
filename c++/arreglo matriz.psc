Proceso sin_titulo
	Definir a,b,c,datos,fil,col Como Entero;
	Dimension a[10,10],b[10,10],c[10,10];
	//llenar arreglo de cero
	para fil<-0 Hasta 9 Hacer
		para col<-0 Hasta 9 Hacer
		a[fil,col]<-0;b[fil,col]<-0;c[fil,col]<-0;
	FinPara
finpara
//lenar arreglo de A
PARA fil<-0 Hasta 3 Hacer
	para col<-0 Hasta  3 Hacer
		Escribir "Introduzca  el elemento a[",fil,"][",col,"]= "Sin Saltar;
		leer a[fil,col];
	FinPara
FinPara
//llenar el arreglo de B
PARA fil<-0 Hasta 3 Hacer
	para col<-0 Hasta  3 Hacer
		Escribir "Introduzca  el elemento b[",fil,"][",col,"]= "Sin Saltar;
		leer b[fil,col];
	FinPara
FinPara
//Calcular el arreglo
PARA fil<-0 Hasta 3 Hacer
	para col<-0 Hasta  3 Hacer
		c[fil,col] <- a[fil,col] + b[fil,col];
	FinPara
FinPara
//
PARA fil<-0 Hasta 3 Hacer
	para col<-0 Hasta  3 Hacer
		Escribir  c[fil,col]," " Sin Saltar;
	FinPara
	Escribir ' ';
FinPara
//
FinProceso
