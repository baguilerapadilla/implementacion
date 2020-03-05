<?php

class DBConnection {
	private $conn;
	
	public static function getDbConnection(){
		include("../../config.php");	
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		
		if(mysqli_connect_errno()){
			echo 'Error, no se pudo conectar a la base de datos: '.mysqli_connect_error();
			return false;
		}  
		
		if (!$conn->set_charset("utf8")) {
			printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
			exit();
		} 
		return $conn;
	
	}
}


?>