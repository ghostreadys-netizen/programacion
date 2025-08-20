Proceso sin_titulo
	Definir a,b,i,mayor,menor,suma Como Entero;
	Dimension a[10],b[10];
	//llenar arreglo de cero
	para i<-0 Hasta 9 Hacer
		a[i]<-0;
		b[i]<-0;
	finpara
	//lenar arreglo de A
	PARA i<-0 Hasta 5 Hacer
			Escribir "Introduzca  el elemento [",i,"]= "Sin Saltar;
			leer a[i];
		FinPara
		para i<-0 Hasta 5 Hacer
			si (a[i] < a[i]) Entonces
				suma<-a[i];
				a[i]<-b[i];
			FinSi
			Escribir " la mayor elemento: ";
			Escribir " el menor elemento: ";
		FinPara
		Escribir " ";
FinProceso
