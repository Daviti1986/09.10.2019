<? php

class database
{
	private static $instance;
	private fuction __construct()
	{
		echo __class__ . "inicializes only one\n";
	}
	public static function getInstance()
	{
		if (!isset(self::$instance)) {
			self::$instance= new database;
		}
		return self::$instance;
	}
}