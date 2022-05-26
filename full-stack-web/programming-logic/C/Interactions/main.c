#include <stdio.h>
#include <stdlib.h>

int main()
{
    char name[256];
    int age;

    printf("What's your name?\n");

    scanf("%s",name);

    printf("\nAwesome %s...How old are you?\n",name);
    scanf("%d",&age);

    printf("\nGreat! %s has %d years old\n",name,age);

    return 0;
}
