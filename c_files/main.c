#include <stdio.h>
#include "isOdd.h"
#include "isEven.h"

int main(void) {
    int num;

    printf("Enter an integer: ");
    if (scanf("%d", &num) != 1) { // error handling
        fprintf(stderr, "please enter an integer\n");
        return 1; 
    }

    isOdd(num);
    isEven(num);

    return 0; 
}
