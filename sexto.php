<?php 

	$ano = 2020;

	function exibir($parametro){
		$parametro = $parametro + 4;
		return $parametro;
	}

	echo "Estamos em ".$ano." e daqui 4 anos estaremos em ".exibir($ano);

	$anos = 2020;
	function ano(){
		GLOBAL $anos;
		$anos++;
		return $anos;
	}

	echo "<br/> Ano: ".$anos;
	echo "<br/> Ano: ".ano();
	echo "<br/> Ano: ".ano();
	echo "<br/> Ano: ".$anos;

	function estatico(){
		STATIC $anos;
		$anos++;
		echo "<br/>". $anos;
	}

	echo estatico();
	echo estatico();
	echo estatico();
 ?>