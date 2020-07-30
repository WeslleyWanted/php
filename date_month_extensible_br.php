<?php
	//recebe a data no formato (Y-m-d) e converte para d-M-Y em PT-BR. 
	//Exemplo: entrada -> "2020-02-25" saída -> 25 de Fevereiro, 2020
	function dataExtenseMonth($data,$separator){
		$data = explode("-",$data);

		switch ($data[1]) {
			case '01':
				$data[1] = "Janeiro";
				break;
			case '02':
				$data[1] = "Fevereiro";
				break;
			case '03':
				$data[1] = "Março";
				break;
			case '04':
				$data[1] = "Abril";
				break;
			case '05':
				$data[1] = "Maio";
				break;
			case '06':
				$data[1] = "Junho";
				break;
			case '07':
				$data[1] = "Julho";
				break;
			case '08':
				$data[1] = "Agosto";
				break;
			case '09':
				$data[1] = "Setembro";
				break;
			case '10':
				$data[1] = "Outubro";
				break;
			case '11':
				$data[1] = "Novembro";
				break;
			case '12':
				$data[1] = "Dezembro";	
			default:
				# code...
				break;
	}

	$data = $data[2]." de ".$data[1].", ".$data[0];
	
	return $data;
?>