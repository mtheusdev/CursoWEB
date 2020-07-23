<?php

session_id('');

require_once("config.php");

session_regenerate_id(); // login, regenerar id

echo session_id();

var_dump($_SESSION);

?>