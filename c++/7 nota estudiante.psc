Algoritmo problema1
	Escribir "ingrese el nombre del alumno"
	leer nombre
	
	sum=0
	para c= 1 hasta 7
		Escribir "ingrese la calificacion"
		leer cali
		sum=sum+cali
	FinPara
	promedio=sum/7
	imprimir "la calificacion del alumno: ",nombre ," es: ",promedio

FinAlgoritmo
