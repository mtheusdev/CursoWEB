<?php

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {

	echo "Índice: ".($index+1)."<br/>";
	echo "O mês é ".$mes. "<br/><br/>";

	echo "{$index} => {$mes}";

}

?>