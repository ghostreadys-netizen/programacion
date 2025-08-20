#include <conio.h>
#include <stdio.h>

int main ()

{
int x,y,z,j,q,t,calf;

printf("Dime tu primer calificacion ");
scanf("%d",&x);

printf("Dime tu segunda calificacion ");
scanf("%d",&y);

printf("Dime tu tercer calificacion ");
scanf("%d",&z);

printf("Dime tu cuarta calificacion ");
scanf("%d",&j);

printf("Dime tu quinta calificacion ");
scanf("%d",&q);



calf=(x+y+z+j+q)/5; 

printf("tu calificacion final es %d",calf);
getch();
return 0;
