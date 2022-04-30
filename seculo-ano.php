<?php

function SeculoAno($ano){
	//separar os digitos em unidades dentro de um vetor
	$unidade = str_split($ano, 1);

	/*Verifica se dois ultimos digitos são 0
	**Se sim, o século condiz com os 2 primeiros dígitos do ano
	**Senão, o século condiz com os 2 primeiros dígitos do ano + 1
	*/
	if($unidade[2] == 0 && $unidade[3] == 0){
		$seculo = $unidade[0].$unidade[1];
	}else{

		$seculo = $unidade[0].$unidade[1];
		$seculo = intval($seculo) + 1; //Converte para inteiro para poder realizar a soma
	}

	echo "Ano ".$ano." = século ".$seculo."</br>";

}

//Chamada de teste da função
SeculoAno(1905);

SeculoAno(1700);
?>
