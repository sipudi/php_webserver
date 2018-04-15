<?php
/**
* 数据库类
*/
class Db
{
	
	private static $db_user;
	private static $db_pwd;
	private static $dsn;
	private static $instance;

	public static function getInstance($value='')
	{
		self::$db_user="rsgl";
		self::$db_pwd="rsgl";
		self::$dsn="oci:dbname=//192.168.31.10:1521/orcl;charset=utf8";
		if (self::$instance) {
			return self::$instance;
		} else {
			self::$instance=new PDO(self::$db_user, self::$db_pwd, self::$dsn);
		}
	}
}

