<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);
echo $q;
var_dump($texto);
echo $texto;
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br/>";

var_dump($texto2);
echo $texto;
?>