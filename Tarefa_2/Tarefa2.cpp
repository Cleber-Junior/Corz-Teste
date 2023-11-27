#include <stdio.h>
#include <conio.h>
#include <math.h>
#include <stdlib.h>

// Declaro primeiramnete minha função
void classificaNumero(int i, int vet);

main(){
	//Delcaro minhas variaveis
	int n, i, t;
	
	//Neste momento estou inserindo o tamanho maximo do vetor
	printf("Digite o tamnho do vetor:");
	scanf("%d", &t);
	
	//Declaro meu vetor só agora para não dar erro no compilador, caso eu declare antes o compilador da erro
	int vetor[t];
	
	//Declaro o numero de cada posição do Vetor
	for(i = 0; i <= t; i++){	
		printf("Digite o numero da posicao %d:", i);
		scanf("%d", &vetor[i]);
	}
	
	printf("\n-------------------------------------\n");
	
	//Mostro o vetor com todos seus valores
	for(i = 0; i <= t; i++){
		printf("Vetor[%d]: %d\n", i, vetor[i]);
		
	}
	
	//Aqui chamo a função, passando a i (Referencia a posição do vetor) e Vetor[i] referencia o valor que esta na posição do vetor 
	for(i = 0; i <= t; i++){
		classificaNumero(i, vetor[i]);
	}
	
}

//A função escreve os resultados dos vetores
void classificaNumero (int i, int vet){
		if(vet < 0){
			printf("\nVetor[%d]: %d -> Numero Negativo", i, vet);
		}else if(vet > 0){
			printf("\nVetor[%d]: %d -> Numero Positivo", i, vet);
		}else{
			printf("\nVetor[%d]: %d -> Zero", i, vet);
		}
	

}
