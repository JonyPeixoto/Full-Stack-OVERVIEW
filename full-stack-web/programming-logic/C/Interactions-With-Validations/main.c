#include <stdio.h>
#include <stdlib.h>

int main()
{
    char name[256];
    int age;

    printf("Hello! What's your name?\n");
    scanf("%s",&name);

    printf("\nHow old are you?\n");
    scanf("%d",&age);

    printf("Name: %s\nAge: %d\n",name,age);

    printf("\nLoading...");

    printf("The first letter of your name is: %c\n",name[0]);

    if(age >= 18){
        printf("\nYou are adult!\n");
    }else if(age >= 12){
        printf("\nYou are teens!\n");
    }else {
        printf("\nYou are child!\n");
    }
    return 0;
}
