#include <stdio.h>
#include <stdlib.h>

int main()
{
    int counter = 1;
    int limit = 10;

    while(counter <= limit){
        printf("We are on the first loop!\n");
        if(counter ==3)
        {
            int counter_2 = 5;
            while(counter_2 > 0){
                printf("We are on the second loop!\n");
                counter_2--;
            }

        }
        counter++;

    }

    return 0;
}
