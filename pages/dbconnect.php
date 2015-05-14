<?php
$host="127.0.0.1";
$dbname="nmm";
$user="root";
$password="";


try{
	$conn= new PDO("mysql:host=$host;dbname=$dbname","$user","$password");
	//var_dump($conn);
	//Echo "<br/> DB connected<br/>";
	}
catch (PDOException $e){
		echo "<BR/><BR/>Failed to connect to DB:<BR/> ".$e->getMessage();
	}

	//$conn is now the DB object to use to access PDO methods

?>
