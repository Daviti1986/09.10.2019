<?php
namespace myapp; 
class database
{
	private static $instance;
	private function __construct()
	{
		echo __class__ . "inicializes only one";
	}
	public static function getInstance()
	{
		if (!isset(self::$instance)) {
			self::$instance= 
			$servername="127.0.0.1";
			$username="root";


			$conn = mysqli_connect ($servername, $username);

if (!$conn) {
	die ("connection failed:" . mysqli_connect_error());
}

$query ="select * from testdb.menu";
$result = mysqli_query($conn, $query);
		}
		return self::$instance;
	}
}