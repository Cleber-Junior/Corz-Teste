#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
#include <math.h>

main(){

	
	int i, n;
	
	//Insere o número de casas que serão apresentadas
	printf("Digite um numero:");
	scanf("%d", &n);
	
	int tv = 6 + n; // TV = Tamanho Vetor
	int vet1[tv], vet2[tv];
	
	//Iserindo dados no meu primeiro vetor
	for(i = 0; i<=tv;i++){
		vet1[i] = i+1;
		//Estou inserindo i+1 para os valores terem um nuemro a mais que a posição, para no momento da multiplicação funcionar
	}

	//Passando os dados do Vetor 1 para o Vetor 2
	for(i = 0; i<=tv; i++){
		vet2[i] = vet1[i] * i;
		//Aqui eu multiplico eles para o vetor 2 receber os valores corretos da sequência
	}
	
	//Mostrando os valores do vetor
	for(i = 1; i<=tv;i++){
		printf("\nVetor[%d]: %d", i, vet2[i]);
	}
	
	
}
	
	
	
