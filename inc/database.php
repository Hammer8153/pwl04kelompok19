<?php 

require_once("config.php");
try{
	$db = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME,DB_USER);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch(Exception $e){
	echo "Could not connect to the database";
	exit;
}
/*   


class DB {
	function __construct() {
		$conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysqli_error());
		mysql_select_db(DB_NAME, $conn);
 	}
}

*/
?>