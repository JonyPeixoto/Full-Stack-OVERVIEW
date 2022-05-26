#include <stdio.h>
#include <stdlib.h>

int main()
{
    //strcmp(strg1, strg2)==0
    //Game: rock, paper or scissor!

    char player[256];
    char player2[256];

    printf("Player 1, Your time...");
    scanf("%s",&player);

    printf("\nPlayer 2, Your time...");
    scanf("%s",&player2);

    printf("\nLoading... We are calculating your result...\n");

    if(strcmp(player,"rock") == 0){

        if(strcmp(player2,"rock") == 0){
            printf("\nTied!\n");
        }else if(strcmp(player2,"paper") == 0){
            printf("\nPlayer 2 win, because paper wraps/win rock\n");
        }else if(strcmp(player2,"scissor") == 0){
            printf("\nPlayer 2 lose, because rock breaks scissor\n");
        }else{
            printf("\nPlayer 2 inserted an invalid information\n");
        }

    }else if(strcmp(player,"paper") == 0){

        if(strcmp(player2,"rock") == 0){
                printf("\n\Player 2 lose, because paper wraps/win rock\n");
            }else if(strcmp(player2,"paper") == 0){
                printf("\nTied!\n");
            }else if(strcmp(player2,"scissor") == 0){
                printf("\nPlayer 2 win, because scissor cuts/win paper\n");
            }else{
                printf("\nPlayer 2 inserted an invalid information\n");
            }

    }else if(strcmp(player,"scissor") == 0){

            if(strcmp(player2,"rock") == 0){
                printf("\n\Player 2 win, because rock crushes/win scissor\n");
            }else if(strcmp(player2,"paper") == 0){
                printf("\nPlayer 2 lose, because scissor cuts/win paper\n");
            }else if(strcmp(player2,"scissor") == 0){
                printf("\nTied!\n");
            }else{
                printf("\nPlayer 2 inserted an invalid information\n");
            }

    }else{
        printf("\nYou inserted an invalid information!\n");

    }

    return 0;
}
