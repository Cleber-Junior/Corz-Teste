#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
#include <math.h>

main(){
	
	int i, r, n;
	//Recebo o valor que vai definir o tamanho maximo do vetor
	printf("\nDigite o numero produtos a serem comprados:");
	scanf("%d", &n);
	
	float cart[n], vt, vd, vtd;
	
	//Recebo o valor e armazeno no vetor
	for(i = 0; i <= n; i++){
		printf("Digite o valor do produto:");
		scanf("%f", &cart[i]);
		vt += cart[i];
	}
	
	printf("\nPreco Unidade:");
	//Mostro na tela cada valor, sem estarem somados
	for(i = 0; i <= n; i++){
		printf("\nR$ %.2f", cart[i]);
	}
	
	// Nesta parte apenas mostro os resultados caso o valor n chegue a 100
	printf("\n\nValor Total: R$ %.2f", vt);
	printf("\nValor Desconto: R$ %2.f", vd);
	printf("\nValor Total (Desconto): R$ %.2f", vtd);
	
	if(vt > 100 && vt < 200){ // Aqui calculos e mostro os resultados, caso o valor seja mais de 100 e menos de 200
		vd = vt * 0.05;
		vtd = vt - (vt * 0.05);
		printf("\n\nValor Total: R$ %.2f", vt);
		printf("\nValor Desconto: R$ %2.f", vd);
		printf("\nValor Total (Desconto): R$ %.2f", vtd);
	}
	else if(vt > 200){ // Aqui estou fazendo os calculos e printando os resultados, caso o valor seja mais de 200
		vd = vt * 0.15;
		vtd = vt - (vt * 0.15);
		printf("\n\nValor Total: R$ %.2f", vt);
		printf("\nValor Desconto: R$%2.f", vd);
		printf("\nValor Total (Desconto): R$ %.2f", vtd);
	}
}
