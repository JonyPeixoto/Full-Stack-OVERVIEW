#include <stdio.h>
#include <stdlib.h>

int main()
{
    int cinema_time = 20;
    int current_time = 20;

    // Can I open in the cinema ?
    if(current_time > cinema_time + 30){
        printf("Timeout! You can not open in the cinema!");
    }else if(current_time < cinema_time - 30){
        printf("The cinema's door still do not open");
    }else{
        printf("The time is correct! You can open!");

    }


    return 0;
}
