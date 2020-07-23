<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true); // se nao colocar o true continua sendo objeto, com true vira array

var_dump($data);

?>