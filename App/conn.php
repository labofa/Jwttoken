<?php 

require 'Config.php';


if (ENV == 0) {
	$Conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	$Connection = ($Conn) ? 'connected' : 'not connected' ;

	return $Connection;
}





 ?>