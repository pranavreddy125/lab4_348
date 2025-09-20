
CC = gcc

CFLAGS = -c -Wall


OBJECTS = main.o isOdd.o isEven.o

all: prog

prog: $(OBJECTS)
	$(CC) $(OBJECTS) -o prog

main.o: main.c
	$(CC) $(CFLAGS) main.c

isOdd.o: isOdd.c isOdd.h
	$(CC) $(CFLAGS) isOdd.c

isEven.o: isEven.c isEven.h
	$(CC) $(CFLAGS) isEven.c

clean:
	rm -rf *.o prog
