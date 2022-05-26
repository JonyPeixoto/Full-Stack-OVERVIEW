#include <stdio.h>
#include <stdlib.h>

int main()
{
    char name[256];
    char surname[256];
    int birth_year;
    int age;

    printf("What's your name?\n");

    scanf("%s",name);

    printf("\nAnd, What's surname?\n",name,surname);
    scanf("%s",surname);

    printf("\nAwesome! %s...How old are you?\n",name);
    scanf("%d",&age);

    printf("\nGreat! %s !\n",name,surname);
    printf("You are %d years old\n",age);

    printf("\nBut... Was you born (birth year?\n",birth_year);
    scanf("%d",&birth_year);

    printf("You are getting old! :)\n",&birth_year);

    return 0;
}
