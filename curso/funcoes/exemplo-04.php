<?php

function ola(){

	$argumentos = func_get_args(); // retorna um array de argumentos ^^

	return $argumentos;

}

var_dump(ola("Bom dia", 10));

?>